<?php

namespace App\Filament\Resources\LearningmaterialsResource\Pages;

use App\Filament\Resources\LearningmaterialsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLearningmaterials extends ListRecords
{
    protected static string $resource = LearningmaterialsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
