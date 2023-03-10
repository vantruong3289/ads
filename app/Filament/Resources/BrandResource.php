<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Filament\Resources\BrandResource\RelationManagers;
use App\Models\Advertiser;
use App\Models\Brand;
use Auth;
use Filament\Forms;
use Filament\Forms\Components\Fieldset;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-badge-check';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('advertiser_id')
                    ->label('Advertiser')
                    ->options(Advertiser::whereId(Auth::guard('advertiser')->id())->pluck('name', 'id'))
                    ->searchable()
                    ->required(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),
                Forms\Components\Textarea::make('about')
                    ->maxLength(65535),
                Forms\Components\TextInput::make('website')
                    ->maxLength(255),
                Forms\Components\TextInput::make('map')
                    ->maxLength(255),
                Fieldset::make('Image')->schema([
                    SpatieMediaLibraryFileUpload::make('logo')->collection('logo'),
                    SpatieMediaLibraryFileUpload::make('banner')->collection('banner'),
                    SpatieMediaLibraryFileUpload::make('cover')->collection('cover'),
                ]),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->contentGrid([
                'md' => 2,
            ])
            ->columns([
                Stack::make([
                    Split::make([
                        SpatieMediaLibraryImageColumn::make('logo')->collection('logo')->grow(false)->circular(),
                        Tables\Columns\TextColumn::make('name'),
                    ]),
                    Stack::make([
                        TextColumn::make('email')->icon('heroicon-o-mail'),
                        TextColumn::make('phone')->icon('heroicon-o-phone'),
                        TextColumn::make('address'),
                        TextColumn::make('website'),
                        TextColumn::make('map'),
                    ])->space(2),
                ])->space(3),
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
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }    
}
