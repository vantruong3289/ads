<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WatchResource\Pages;
use App\Filament\Resources\WatchResource\RelationManagers;
use App\Models\Watch;
use Auth;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WatchResource extends Resource
{
    protected static ?string $model = Watch::class;

    protected static ?string $navigationIcon = 'heroicon-o-gift';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('consumer_id'),
                Forms\Components\TextInput::make('brand_id'),
                Forms\Components\TextInput::make('ads_id'),
                Forms\Components\TextInput::make('currency')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('money')
                    ->required(),
                Forms\Components\TextInput::make('voucher')
                    ->required(),
                Forms\Components\Toggle::make('status')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('consumer.name'),
                Tables\Columns\TextColumn::make('brand.name'),
                Tables\Columns\TextColumn::make('ads.title'),
                Tables\Columns\TextColumn::make('currency'),
                Tables\Columns\TextColumn::make('money'),
                Tables\Columns\TextColumn::make('voucher'),
                Tables\Columns\IconColumn::make('status')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Time')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListWatches::route('/'),
            'create' => Pages\CreateWatch::route('/create'),
            'edit' => Pages\EditWatch::route('/{record}/edit'),
        ];
    }    

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->latest()->whereIn('brand_id', Auth::guard('advertiser')->user()->brands->pluck('id'));
    }
}
