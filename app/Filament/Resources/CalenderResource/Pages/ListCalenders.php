<?php

namespace App\Filament\Resources\CalenderResource\Pages;

use App\Filament\Resources\CalenderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCalenders extends ListRecords
{
    protected static string $resource = CalenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
