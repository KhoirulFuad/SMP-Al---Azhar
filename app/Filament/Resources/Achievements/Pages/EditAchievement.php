<?php

namespace App\Filament\Resources\Achievements\Pages;

use App\Filament\Resources\Achievements\AchievementResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAchievement extends EditRecord
{
    protected static string $resource = AchievementResource::class;

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
