<?php

namespace App\Filament\Resources\PrincipalMessages\Pages;

use App\Filament\Resources\PrincipalMessages\PrincipalMessageResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPrincipalMessages extends ListRecords
{
    protected static string $resource = PrincipalMessageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
