<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PengelolaPotensi;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PengelolaPotensiResource\Pages;
use App\Filament\Resources\PengelolaPotensiResource\RelationManagers;

class PengelolaPotensiResource extends Resource
{
    protected static ?string $model = PengelolaPotensi::class;

    protected static ?int $navigationSort = 5;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_potensi')
                ->label('Potensi Alam')
                ->relationship('potensiAlam','nama_potensi')
                ->required(),

                TextInput::make('nama_pengelola')
                ->label('Pengelola Potensi')
                ->maxLength(100)
                ->required(),

                TextInput::make('kontak_pengelola')
                ->label('Kontak Potensi')
                ->prefix('+62')
                ->tel()
                ->maxLength(11)
                ->numeric()
                ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('potensiAlam.nama_potensi')
                ->label("Potensi Alam"),

                TextColumn::make('nama_pengelola')
                ->label("Nama Pengelola")
                ->searchable(),

                TextColumn::make('kontak_pengelola')
                ->prefix("+62")
                ->label("Kontak"),
            ])
            ->filters([
                SelectFilter::make('nama_pengelola')
                ->label('Pengelola Potensi'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengelolaPotensis::route('/'),
            'create' => Pages\CreatePengelolaPotensi::route('/create'),
            'edit' => Pages\EditPengelolaPotensi::route('/{record}/edit'),
        ];
    }
}
