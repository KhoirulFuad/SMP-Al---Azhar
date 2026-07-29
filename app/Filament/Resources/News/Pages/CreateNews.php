<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;

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
