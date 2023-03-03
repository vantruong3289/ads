<?php

namespace App\Filament\Resources\ConsumerResource\Pages;

use App\Filament\Resources\ConsumerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListConsumers extends ListRecords
{
    protected static string $resource = ConsumerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
