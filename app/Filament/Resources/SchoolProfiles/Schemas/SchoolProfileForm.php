<?php

namespace App\Filament\Resources\SchoolProfiles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class SchoolProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                RichEditor::make('history')
                    ->placeholder('history of the school')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(
                        ['style' => 'min-height: 300px;'],
                    ),
                RichEditor::make('vision')
                    ->placeholder('vision of the school')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(
                        ['style' => 'min-height: 300px;'],
                    ),
                RichEditor::make('mission')
                    ->placeholder('mission of the school')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(
                        ['style' => 'min-height: 300px;'],
                    ),
                FileUpload::make('image')
                    ->label('Organizational Structure')
                    ->image()
                    ->disk('public')
                    ->directory('structure_images')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->imagePreviewHeight('200')
                    ->previewable()
                    ->required(),
            ]);
    }
}
