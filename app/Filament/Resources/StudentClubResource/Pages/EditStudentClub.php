<?php

namespace App\Filament\Resources\StudentClubResource\Pages;

use App\Filament\Resources\StudentClubResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentClub extends EditRecord
{
    protected static string $resource = StudentClubResource::class;

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
