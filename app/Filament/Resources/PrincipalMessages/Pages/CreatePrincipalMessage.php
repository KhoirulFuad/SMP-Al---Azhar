<?php

namespace App\Filament\Resources\PrincipalMessages\Pages;

use App\Filament\Resources\PrincipalMessages\PrincipalMessageResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;
use App\Models\PrincipalMessage;
use Filament\Notifications\Notification;



class CreatePrincipalMessage extends CreateRecord
{
    protected static string $resource = PrincipalMessageResource::class;

    public function mount(): void
    {
        if (PrincipalMessage::count() >= 1) {
            Notification::make()
                ->title('Cannot add data!')
                ->body('Principal Message data can only have 1 entry.')
                ->danger()
                ->send();

            $this->redirect(PrincipalMessageResource::getUrl('index'));
            return;
        }

        parent::mount();
    }

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
