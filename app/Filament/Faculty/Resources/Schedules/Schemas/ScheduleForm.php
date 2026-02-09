<?php

namespace App\Filament\Faculty\Resources\Schedules\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Schemas\Schema;

class ScheduleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('subject_id')
                    ->required()
                    ->numeric(),
                TextInput::make('instructor_id')
                    ->required()
                    ->numeric(),
                TextInput::make('day_of_week')
                    ->required(),
                TimePicker::make('start_time')
                    ->required(),
                TimePicker::make('end_time')
                    ->required(),
                TextInput::make('semester'),
                TextInput::make('academic_year'),
            ]);
    }
}
