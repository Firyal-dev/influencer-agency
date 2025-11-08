<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Filament\Support\Icons\Heroicon;
use BackedEnum;
use App\Filament\Widgets\StatsOverview;

class Dashboard extends BaseDashboard
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedHome;

    protected string $view = 'filament.pages.dashboard';

    public function getWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

}
