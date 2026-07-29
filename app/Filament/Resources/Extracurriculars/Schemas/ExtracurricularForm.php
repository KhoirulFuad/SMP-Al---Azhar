<?php

namespace App\Filament\Resources\Extracurriculars\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;

class ExtracurricularForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->placeholder('name extracurricular')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(
                        fn($state, $set) =>
                        $set('slug', \Illuminate\Support\Str::slug($state))
                    ),
                TextInput::make('slug')
                    ->placeholder('filled automatically')
                    ->readOnly()
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('extracurriculars')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->imagePreviewHeight('200')
                    ->previewable()
                    ->required(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->extraAttributes(
                        ['style' => 'min-height: 300px;'],
                    ),
            ]);
    }
}
