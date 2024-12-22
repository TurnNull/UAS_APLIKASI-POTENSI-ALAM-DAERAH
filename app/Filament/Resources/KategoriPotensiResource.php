<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\KategoriPotensi;
use Filament\Resources\Resource;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\KategoriPotensiResource\Pages;
use App\Filament\Resources\KategoriPotensiResource\RelationManagers;

class KategoriPotensiResource extends Resource
{
    protected static ?string $model = KategoriPotensi::class;

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_kategori')
                ->label('Kategori Potensi')
                ->maxLength(100)
                ->required(),

                Textarea::make('deskripsi')
                ->label('Deskripsi Potensi')
                ->autosize()
                ->minLength(2)
                ->maxLength(2048)
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kategori')
                ->label("Nama Kategori")
                ->searchable(),

                TextColumn::make('deskripsi')
                ->default("none"),
            ])
            ->filters([
                SelectFilter::make('nama_kategori')
                ->label('Nama Kategori'),
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
            'index' => Pages\ListKategoriPotensis::route('/'),
            'create' => Pages\CreateKategoriPotensi::route('/create'),
            'edit' => Pages\EditKategoriPotensi::route('/{record}/edit'),
        ];
    }
}
