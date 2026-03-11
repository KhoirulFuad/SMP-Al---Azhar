<?php

namespace App\Filament\Resources\SchoolAgendas\Pages;

use App\Filament\Resources\SchoolAgendas\SchoolAgendaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSchoolAgenda extends EditRecord
{
    protected static string $resource = SchoolAgendaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    // getRedirectUrl 

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
