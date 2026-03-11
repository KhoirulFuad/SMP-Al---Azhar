<?php

namespace App\Filament\Resources\PrincipalMessages\Pages;

use App\Filament\Resources\PrincipalMessages\PrincipalMessageResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPrincipalMessage extends EditRecord
{
    protected static string $resource = PrincipalMessageResource::class;

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
