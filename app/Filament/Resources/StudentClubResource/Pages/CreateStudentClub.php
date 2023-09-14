<?php

namespace App\Filament\Resources\StudentClubResource\Pages;

use App\Filament\Resources\StudentClubResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStudentClub extends CreateRecord
{
    protected static string $resource = StudentClubResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
