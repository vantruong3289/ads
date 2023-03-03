<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AdvertiserResource\Pages;
use App\Filament\Resources\AdvertiserResource\RelationManagers;
use App\Models\Advertiser;
use Auth;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class AdvertiserResource extends Resource
{
    protected static ?string $model = Advertiser::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('sex')
                    ->options([
                        '0' => 'None',
                        '1' => 'Male',
                        '2' => 'Female',
                    ])
                    ->required(),
                SpatieMediaLibraryFileUpload::make('avatar')->collection('avatar'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('avatar')->collection('avatar'),
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('sex')
                    ->enum([
                        '0' => 'None',
                        '1' => 'Male',
                        '2' => 'Female',
                    ]),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
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
            'index' => Pages\ListAdvertisers::route('/'),
            'create' => Pages\CreateAdvertiser::route('/create'),
            'edit' => Pages\EditAdvertiser::route('/{record}/edit'),
        ];
    }   
    
    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('id', Auth::guard('advertiser')->id());
    }
}
