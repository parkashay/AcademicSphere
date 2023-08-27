<?php

namespace App\Filament\Resources\TranscriptsResource\Pages;

use App\Filament\Resources\TranscriptsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTranscripts extends EditRecord
{
    protected static string $resource = TranscriptsResource::class;

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
