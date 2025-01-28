<?php

namespace App\Filament\Resources\LearningPathCategoryResource\Pages;

use App\Filament\Resources\LearningPathCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLearningPathCategory extends EditRecord
{
    protected static string $resource = LearningPathCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
