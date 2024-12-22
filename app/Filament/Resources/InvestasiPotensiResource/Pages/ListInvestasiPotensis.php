<?php

namespace App\Filament\Resources\InvestasiPotensiResource\Pages;

use App\Filament\Resources\InvestasiPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListInvestasiPotensis extends ListRecords
{
    protected static string $resource = InvestasiPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
