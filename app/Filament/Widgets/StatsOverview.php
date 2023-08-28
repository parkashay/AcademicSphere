<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Program;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Programs', Program::all()->count())
            ->chart([1,2,4,5,5,7])->color('success'),
            Stat::make('Total Posts', Post::all()->count())
            ->chart([1,12,3])->color('success'),
            Stat::make('Total Users', User::all()->count())
            ->chart([2,3,5,6,7,8,10])->color('warning'),
        ];
    }
    public static function canView(): bool
    {
        return (auth()->user()->role === 'admin');
    }
}
