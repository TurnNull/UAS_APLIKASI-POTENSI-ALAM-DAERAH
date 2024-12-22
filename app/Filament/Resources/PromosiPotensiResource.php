<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\PromosiPotensi;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PromosiPotensiResource\Pages;
use App\Filament\Resources\PromosiPotensiResource\RelationManagers;

class PromosiPotensiResource extends Resource
{
    protected static ?string $model = PromosiPotensi::class;

    protected static ?int $navigationSort = 7;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('id_potensi')
                ->label('Potensi')
                ->relationship('potensiAlam','nama_potensi')
                ->required(),

                TextInput::make('media_promosi')
                ->label('Media Promosi')
                ->maxLength(100)
                ->required(),

                DatePicker::make('tanggal_publikasi')
                ->label('Tanggal Publikasi')
                ->format('Y/m/d')
                ->required(),

                Select::make('status_promosi')
                ->options([
                    'Tertutup' => 'Tertutup',
                    'terpublis' => 'Terpublis',
                ])
                ->native(false)
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('potensiAlam.nama_potensi')
                ->label("Nama Potensi"),
                
                TextColumn::make('media_promosi')
                ->label("Media Promosi")
                ->searchable(),
                
                TextColumn::make('tanggal_publikasi')
                ->date()
                ->label("Tanggal Publikasi"),

                TextColumn::make('status_promosi')
                ->label("Status Promosi"),
            ])
            ->filters([
                SelectFilter::make('media_promosi')
                ->label('Media Promosi'),
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
            'index' => Pages\ListPromosiPotensis::route('/'),
            'create' => Pages\CreatePromosiPotensi::route('/create'),
            'edit' => Pages\EditPromosiPotensi::route('/{record}/edit'),
        ];
    }
}
