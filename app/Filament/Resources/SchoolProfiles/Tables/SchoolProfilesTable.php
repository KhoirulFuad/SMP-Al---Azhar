<?php

namespace App\Filament\Resources\SchoolProfiles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SchoolProfilesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('history')
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->limit(30),
                TextColumn::make('vision')
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->limit(30),
                TextColumn::make('mission')
                    ->formatStateUsing(fn($state) => strip_tags($state))
                    ->limit(30),
                ImageColumn::make('image')
                    ->label('Organizational Structure')
                    ->disk('public'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
