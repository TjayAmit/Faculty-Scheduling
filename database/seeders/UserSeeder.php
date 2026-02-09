<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'tristanjayamit0813@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('Admin');

        $manager = User::create([
            'name' => 'Manager',
            'email' => 'manager@mailinator.com',
            'password' => bcrypt('password'),
        ]);

        $manager->assignRole('Manager');

        $faculty = User::create([
            'name' => 'Faculty',
            'email' => 'faculty@mailinator.com',
            'password' => bcrypt('password'),
        ]);

        $faculty->assignRole('Faculty');
    }
}
