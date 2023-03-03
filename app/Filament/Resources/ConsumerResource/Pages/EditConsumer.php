<?php

namespace App\Filament\Resources\ConsumerResource\Pages;

use App\Filament\Resources\ConsumerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConsumer extends EditRecord
{
    protected static string $resource = ConsumerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
