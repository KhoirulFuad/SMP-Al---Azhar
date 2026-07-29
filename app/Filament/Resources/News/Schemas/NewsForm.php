<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->placeholder('title news')
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
                    ->directory('news')
                    ->visibility('public')
                    ->maxSize(2048)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'image/webp'])
                    ->imagePreviewHeight('200')
                    ->previewable()
                    ->required(),
                DatePicker::make('news_date')
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
