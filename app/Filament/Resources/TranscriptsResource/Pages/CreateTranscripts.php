<?php

namespace App\Filament\Resources\TranscriptsResource\Pages;

use App\Filament\Resources\TranscriptsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateTranscripts extends CreateRecord
{
    protected static string $resource = TranscriptsResource::class;
    protected function getRedirectUrl(): string
    {
     return $this->getResource()::getUrl('index');  
    }
}
