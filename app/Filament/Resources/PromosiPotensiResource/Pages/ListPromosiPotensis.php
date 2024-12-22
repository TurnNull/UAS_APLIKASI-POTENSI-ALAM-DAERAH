<?php

namespace App\Filament\Resources\PromosiPotensiResource\Pages;

use App\Filament\Resources\PromosiPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromosiPotensis extends ListRecords
{
    protected static string $resource = PromosiPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
