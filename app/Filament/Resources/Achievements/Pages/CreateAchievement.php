<?php

namespace App\Filament\Resources\Achievements\Pages;

use App\Filament\Resources\Achievements\AchievementResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Actions\Action;

class CreateAchievement extends CreateRecord
{
    protected static string $resource = AchievementResource::class;

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
