<?php

namespace App\Filament\Resources\ProjectAssignmentResource\Pages;

use App\Filament\Resources\ProjectAssignmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProjectAssignment extends EditRecord
{
    protected static string $resource = ProjectAssignmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
