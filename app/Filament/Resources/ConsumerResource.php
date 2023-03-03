<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ConsumerResource\Pages;
use App\Filament\Resources\ConsumerResource\RelationManagers;
use App\Models\Consumer;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;

class ConsumerResource extends Resource
{
    protected static ?string $model = Consumer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

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
            'index' => Pages\ListConsumers::route('/'),
            'create' => Pages\CreateConsumer::route('/create'),
            'edit' => Pages\EditConsumer::route('/{record}/edit'),
        ];
    }    
}
