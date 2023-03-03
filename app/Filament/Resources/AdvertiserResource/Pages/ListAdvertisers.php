<?php

namespace App\Filament\Resources\AdvertiserResource\Pages;

use App\Filament\Resources\AdvertiserResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAdvertisers extends ListRecords
{
    protected static string $resource = AdvertiserResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
