<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleAndPermissionSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Reset cached roles and permissions BEFORE seeding
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $guard = 'web';

        // 2. Create Permissions
        $permissions = [
            'manage managers',
            'manage faculty',
            'view all faculty',
            'manage schedules',
            'manage subjects',
            'view own profile',
            'view own schedules',
            'view own subjects',
            'view all schedules', // Added this based on your Faculty assignment
        ];

        foreach ($permissions as $name) {
            Permission::firstOrCreate([
                'name' => $name,
                'guard_name' => $guard
            ]);
        }

        // 3. IMPORTANT: Reset cache AFTER creating permissions
        // This ensures the Role assignment "sees" the new records
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // 4. Create Roles and Sync Permissions

        // ADMIN: User Management focus
        Role::firstOrCreate(['name' => 'admin', 'guard_name' => $guard])
            ->syncPermissions(['manage managers', 'manage faculty']);

        // MANAGER: Academic Operations focus
        Role::firstOrCreate(['name' => 'manager', 'guard_name' => $guard])
            ->syncPermissions([
                'view all faculty',
                'view own profile',
                'view own schedules',
                'view own subjects',
                'manage schedules',
                'manage subjects'
            ]);

        // FACULTY: Personal Workload focus
        Role::firstOrCreate(['name' => 'faculty', 'guard_name' => $guard])
            ->syncPermissions([
                'view own profile',
                'view own schedules',
                'view own subjects',
                'view all schedules'
            ]);
    }
}
