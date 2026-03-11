<?php

namespace App\Filament\Resources\SchoolAgendas\Pages;

use App\Filament\Resources\SchoolAgendas\SchoolAgendaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSchoolAgendas extends ListRecords
{
    protected static string $resource = SchoolAgendaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
