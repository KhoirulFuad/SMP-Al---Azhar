<?php

namespace App\Filament\Widgets;

use App\Models\Achievement;
use App\Models\Extracurricular;
use App\Models\News;
use App\Models\PrincipalMessage;
use App\Models\SchoolAgenda;
use App\Models\SchoolProfile;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Achievements', Achievement::count())
                ->description('Total school achievements')
                // ->descriptionIcon('heroicon-m-star')
                ->color('success'),

            Stat::make('Extracurriculars', Extracurricular::count())
                ->description('Total extracurriculars')
                // ->descriptionIcon('heroicon-m-user-group')
                ->color('success'),

            Stat::make('News', News::count())
                ->description('Total news published')
                // ->descriptionIcon('heroicon-m-newspaper')
                ->color('success'),

            Stat::make('Principal Messages', PrincipalMessage::count())
                ->description('Messages from the principal')
                // ->descriptionIcon('heroicon-m-chat-bubble-left-right')
                ->color('success'),

            Stat::make('School Agendas', SchoolAgenda::count())
                ->description('Upcoming agendas')
                // ->descriptionIcon('heroicon-m-calendar-days')
                ->color('success'),

            Stat::make('School Profiles', SchoolProfile::count())
                ->description('School profiles data')
                // ->descriptionIcon('heroicon-m-building-office-2')
                ->color('success'),
        ];
    }
}
