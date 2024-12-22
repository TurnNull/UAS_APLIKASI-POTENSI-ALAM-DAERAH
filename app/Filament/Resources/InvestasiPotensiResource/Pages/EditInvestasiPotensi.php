<?php

namespace App\Filament\Resources\InvestasiPotensiResource\Pages;

use App\Filament\Resources\InvestasiPotensiResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInvestasiPotensi extends EditRecord
{
    protected static string $resource = InvestasiPotensiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
