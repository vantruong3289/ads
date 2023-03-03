<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdsResource\Pages;
use App\Filament\Resources\AdsResource\RelationManagers;
use App\Models\Ads;
use App\Models\Brand;
use Auth;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AdsResource extends Resource
{
    protected static ?string $model = Ads::class;

    protected static ?string $navigationIcon = 'heroicon-o-status-online';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('brand_id')
                    ->label('Brand')
                    ->options(Brand::whereAdvertiserId(Auth::guard('advertiser')->id())->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('content')
                    ->required()
                    ->maxLength(65535),
                Fieldset::make('Config')->schema([
                    Forms\Components\TextInput::make('seconds')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('currency')
                        ->required(),
                    Forms\Components\TextInput::make('money')
                        ->required()
                        ->numeric(),
                    Forms\Components\TextInput::make('voucher')
                        ->required()
                        ->numeric(),
                ]),
                
                Fieldset::make('Image')->schema([
                    SpatieMediaLibraryFileUpload::make('mobile')->collection('ads-mobile'),
                    SpatieMediaLibraryFileUpload::make('desktop')->collection('ads-desktop'),
                ]),

                Forms\Components\Toggle::make('active')
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-s-lightning-bolt')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand.name'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('content')->limit(50),
                Tables\Columns\TextColumn::make('seconds'),
                Tables\Columns\TextColumn::make('money'),
                Tables\Columns\TextColumn::make('currency'),
                Tables\Columns\TextColumn::make('voucher'),
                Tables\Columns\IconColumn::make('active')->boolean(),
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
            'index' => Pages\ListAds::route('/'),
            'create' => Pages\CreateAds::route('/create'),
            'edit' => Pages\EditAds::route('/{record}/edit'),
        ];
    }    

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->whereRelation('brand.advertiser', 'id', Auth::guard('advertiser')->id());
    }
}
