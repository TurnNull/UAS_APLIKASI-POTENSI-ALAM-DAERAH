<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\RawJs;
use App\Models\InvestasiPotensi;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\InvestasiPotensiResource\Pages;
use App\Filament\Resources\InvestasiPotensiResource\RelationManagers;

class InvestasiPotensiResource extends Resource
{
    protected static ?string $model = InvestasiPotensi::class;

    protected static ?int $navigationSort = 8;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_potensi')
                ->label('Potensi')
                ->relationship('potensiAlam','nama_potensi')
                ->required(),

                TextInput::make('investor')
                ->label('Investor')
                ->maxLength(100)
                ->required(),

                TextInput::make('jumlah_investasi')
                ->label('Jumlah Investasi')
                ->prefix('Rp')
                ->mask(RawJs::make('$money($input)'))
                ->stripCharacters(',')
                ->numeric()
                ->required(),

                DatePicker::make('tanggal_investasi')
                ->label('Tanggal Investasi')
                ->format('Y/m/d')
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('potensiAlam.nama_potensi')
                ->label("Nama Potensi"),
                
                TextColumn::make('investor')
                ->label("Investor")
                ->searchable(),

                TextColumn::make('jumlah_investasi')
                ->label("Jumlah Investasi")
                ->prefix('Rp ')
                ->numeric(),

                TextColumn::make('tanggal_investasi')
                ->date()
                ->label("Tanggal Investasi"),
            ])
            ->filters([
                SelectFilter::make('investor')
                ->label('Investor'),
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
            'index' => Pages\ListInvestasiPotensis::route('/'),
            'create' => Pages\CreateInvestasiPotensi::route('/create'),
            'edit' => Pages\EditInvestasiPotensi::route('/{record}/edit'),
        ];
    }
}
