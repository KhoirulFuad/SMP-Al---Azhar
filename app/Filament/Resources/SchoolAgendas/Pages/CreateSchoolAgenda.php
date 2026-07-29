<?php

namespace App\Filament\Resources\SchoolAgendas\Pages;

use App\Filament\Resources\SchoolAgendas\SchoolAgendaResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateSchoolAgenda extends CreateRecord
{
    protected static string $resource = SchoolAgendaResource::class;

    // getRedirectUrl 
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getCreateAnotherFormAction(): Action
    {
        return parent::getCreateAnotherFormAction()->hidden();
    }
}
