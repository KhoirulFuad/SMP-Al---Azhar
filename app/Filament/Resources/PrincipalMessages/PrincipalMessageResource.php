<?php

namespace App\Filament\Resources\PrincipalMessages;

use App\Filament\Resources\PrincipalMessages\Pages\CreatePrincipalMessage;
use App\Filament\Resources\PrincipalMessages\Pages\EditPrincipalMessage;
use App\Filament\Resources\PrincipalMessages\Pages\ListPrincipalMessages;
use App\Filament\Resources\PrincipalMessages\Schemas\PrincipalMessageForm;
use App\Filament\Resources\PrincipalMessages\Tables\PrincipalMessagesTable;
use App\Models\PrincipalMessage;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PrincipalMessageResource extends Resource
{
    protected static ?string $model = PrincipalMessage::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return PrincipalMessageForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrincipalMessagesTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPrincipalMessages::route('/'),
            'create' => CreatePrincipalMessage::route('/create'),
            'edit' => EditPrincipalMessage::route('/{record}/edit'),
        ];
    }
}
