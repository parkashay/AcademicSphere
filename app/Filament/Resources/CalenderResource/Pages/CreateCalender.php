<?php

namespace App\Filament\Resources\CalenderResource\Pages;

use App\Filament\Resources\CalenderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCalender extends CreateRecord
{
    protected static string $resource = CalenderResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
