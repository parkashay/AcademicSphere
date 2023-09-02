<?php

namespace App\Filament\Resources\LearningmaterialsResource\Pages;

use App\Filament\Resources\LearningmaterialsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearningmaterials extends EditRecord
{
    protected static string $resource = LearningmaterialsResource::class;

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
