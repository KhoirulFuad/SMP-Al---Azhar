<?php

namespace App\Filament\Resources\SchoolProfiles\Pages;

use App\Filament\Resources\SchoolProfiles\SchoolProfileResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;
use App\Models\SchoolProfile;
use Filament\Notifications\Notification;

class CreateSchoolProfile extends CreateRecord
{
    protected static string $resource = SchoolProfileResource::class;

    public function mount(): void
    {
        if (SchoolProfile::count() >= 1) {
            Notification::make()
                ->title('Cannot add data!')
                ->body('School Profile data can only have 1 entry.')
                ->danger()
                ->send();

            $this->redirect(SchoolProfileResource::getUrl('index'));
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
