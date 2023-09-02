<?php

namespace App\Filament\Resources\LearningmaterialsResource\Pages;

use App\Filament\Resources\LearningmaterialsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLearningmaterials extends CreateRecord
{
    protected static string $resource = LearningmaterialsResource::class;
    protected function getRedirectUrl(): string
    {
     return $this->getResource()::getUrl('index');  
    }
}
