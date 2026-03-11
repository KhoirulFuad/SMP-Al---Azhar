<?php

namespace App\Filament\Resources\SchoolAgendas;

use App\Filament\Resources\SchoolAgendas\Pages\CreateSchoolAgenda;
use App\Filament\Resources\SchoolAgendas\Pages\EditSchoolAgenda;
use App\Filament\Resources\SchoolAgendas\Pages\ListSchoolAgendas;
use App\Filament\Resources\SchoolAgendas\Schemas\SchoolAgendaForm;
use App\Filament\Resources\SchoolAgendas\Tables\SchoolAgendasTable;
use App\Models\SchoolAgenda;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SchoolAgendaResource extends Resource
{
    protected static ?string $model = SchoolAgenda::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SchoolAgendaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SchoolAgendasTable::configure($table);
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
            'index' => ListSchoolAgendas::route('/'),
            'create' => CreateSchoolAgenda::route('/create'),
            'edit' => EditSchoolAgenda::route('/{record}/edit'),
        ];
    }
}
