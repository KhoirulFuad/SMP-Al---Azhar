<?php

namespace App\Filament\Resources\PrincipalMessages\Pages;

use App\Filament\Resources\PrincipalMessages\PrincipalMessageResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePrincipalMessage extends CreateRecord
{
    protected static string $resource = PrincipalMessageResource::class;

    // getRedirectUrl 

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
