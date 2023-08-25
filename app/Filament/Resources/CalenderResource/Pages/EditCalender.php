<?php

namespace App\Filament\Resources\CalenderResource\Pages;

use App\Filament\Resources\CalenderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCalender extends EditRecord
{
    protected static string $resource = CalenderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
