<?php

namespace App\Filament\Widgets;

use App\Models\Brand;
use App\Models\Campaign;
use App\Models\Influencer;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Influencers', Influencer::count())
            ->description('Total Influencer')
            ->descriptionIcon('heroicon-o-users')
            ->color('success'),
            Stat::make('Brands', Brand::count())
            ->description('Total Brand')
            ->descriptionIcon('heroicon-o-building-office')
            ->color('info'),
            Stat::make('Campaigns', Campaign::count())
            ->description('Total Campaign')
            ->descriptionIcon('heroicon-o-megaphone')
            ->color('warning'),
        ];
    }
}
