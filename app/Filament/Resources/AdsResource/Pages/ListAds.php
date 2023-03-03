<?php

namespace App\Filament\Resources\AdsResource\Pages;

use App\Filament\Resources\AdsResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAds extends ListRecords
{
    protected static string $resource = AdsResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
