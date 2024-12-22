<?php

namespace App\Filament\Resources\PromosiPotensiResource\Pages;

use App\Filament\Resources\PromosiPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPromosiPotensi extends EditRecord
{
    protected static string $resource = PromosiPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
