<?php

namespace App\Filament\Resources\SchoolAgendas\Pages;

use App\Filament\Resources\SchoolAgendas\SchoolAgendaResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSchoolAgenda extends CreateRecord
{
    protected static string $resource = SchoolAgendaResource::class;

    // getRedirectUrl 

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
