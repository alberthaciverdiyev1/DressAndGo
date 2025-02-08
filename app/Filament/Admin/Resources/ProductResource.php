<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('short_description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('long_description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Forms\Components\TextInput::make('discounted_price')
                    ->numeric()
                    ->default(null),
                Forms\Components\TextInput::make('sku')
                    ->label('SKU')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('tags')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('colors')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('sizes')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('features')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('fabric_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('care_instructions')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('occasion_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sleeve_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('pattern')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('closure_type')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('origin_country')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Toggle::make('is_on_sale')
                    ->required(),
                Forms\Components\TextInput::make('sale_percentage')
                    ->numeric()
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('discounted_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable(),
                Tables\Columns\TextColumn::make('category')
                    ->searchable(),
                Tables\Columns\TextColumn::make('fabric_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('care_instructions')
                    ->searchable(),
                Tables\Columns\TextColumn::make('occasion_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sleeve_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pattern')
                    ->searchable(),
                Tables\Columns\TextColumn::make('closure_type')
                    ->searchable(),
                Tables\Columns\TextColumn::make('origin_country')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_on_sale')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sale_percentage')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
