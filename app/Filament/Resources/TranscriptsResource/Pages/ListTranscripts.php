<?php

namespace App\Filament\Resources\TranscriptsResource\Pages;

use App\Filament\Resources\TranscriptsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTranscripts extends ListRecords
{
    protected static string $resource = TranscriptsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
