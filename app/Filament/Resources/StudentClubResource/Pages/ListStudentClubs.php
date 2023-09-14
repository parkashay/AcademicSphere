<?php

namespace App\Filament\Resources\StudentClubResource\Pages;

use App\Filament\Resources\StudentClubResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentClubs extends ListRecords
{
    protected static string $resource = StudentClubResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
