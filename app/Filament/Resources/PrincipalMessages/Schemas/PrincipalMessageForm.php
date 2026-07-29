<?php

namespace App\Filament\Resources\PrincipalMessages\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PrincipalMessageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->placeholder('name of the principal')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('principal_messages')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->imagePreviewHeight('200')
                    ->previewable()
                    ->required(),
                RichEditor::make('message')
                    ->required()
                    ->columnSpanFull()->extraAttributes(
                        ['style' => 'min-height: 300px;'],
                    ),
                TextInput::make('total_students')
                    ->numeric(),
                TextInput::make('total_staff')
                    ->numeric(),
            ]);
    }
}
