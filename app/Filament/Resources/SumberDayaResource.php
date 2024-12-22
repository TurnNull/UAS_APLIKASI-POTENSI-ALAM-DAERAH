<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\SumberDaya;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\SumberDayaResource\Pages;
use App\Filament\Resources\SumberDayaResource\RelationManagers;

class SumberDayaResource extends Resource
{
    protected static ?string $model = SumberDaya::class;

    protected static ?int $navigationSort = 4;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_potensi')
                ->label('Potensi')
                ->relationship('potensiAlam','nama_potensi')
                ->required(),

                TextInput::make('jenis_sumber_daya')
                ->label('Jenis Sumber Daya')
                ->maxLength(100)
                ->required(),

                TextInput::make('jumlah')
                ->label('Jumlah')
                ->numeric()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('potensiAlam.nama_potensi')
                ->label("Potensi Alam")
                ->searchable(),

                TextColumn::make('jenis_sumber_daya')
                ->label("Jenis Sumber Daya"),

                TextColumn::make('jumlah')
                ->label("Jumlah")
                ->numeric(),
            ])
            ->filters([
                SelectFilter::make('id_potensi')
                ->label('Potensi Alam')
                ->relationship('potensiAlam', 'nama_potensi'),
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
            'index' => Pages\ListSumberDayas::route('/'),
            'create' => Pages\CreateSumberDaya::route('/create'),
            'edit' => Pages\EditSumberDaya::route('/{record}/edit'),
        ];
    }
}
