<?php

namespace App\Filament\Resources\ProfilResource\Pages;

use Filament\Actions;
use App\Models\Profil;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\ProfilResource;

class EditProfil extends EditRecord
{
    protected static string $resource = ProfilResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
