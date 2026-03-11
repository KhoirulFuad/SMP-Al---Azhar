<?php

namespace App\Filament\Resources\PrincipalMessages\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PrincipalMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('photo'),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('total_students')
                    ->numeric(),
                TextInput::make('total_staff')
                    ->numeric(),
                TextInput::make('slug')
                    ->required(),
                DatePicker::make('news_date')
                    ->required(),
                Textarea::make('content')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
