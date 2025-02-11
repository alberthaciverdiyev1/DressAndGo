<?php

namespace App\Filament\Admin\Resources;

use App\Enums\Size;
use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Color;
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
                Forms\Components\Tabs::make('Product Details')
                    ->tabs([
                        Forms\Components\Tabs\Tab::make('General Details')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Textarea::make('short_description')
                                    ->columnSpanFull(),
                                Forms\Components\Textarea::make('long_description')
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Tabs\Tab::make('Price')
                            ->schema([
                                Forms\Components\TextInput::make('price')
                                    ->required()
                                    ->numeric()
                                    ->prefix('$'),
                                Forms\Components\TextInput::make('discounted_price')
                                    ->numeric()
                                    ->default(null),
                                Forms\Components\Toggle::make('is_on_sale')
                                    ->required(),
                                Forms\Components\TextInput::make('sale_percentage')
                                    ->numeric()
                                    ->default(null),
                            ]),

                        Forms\Components\Tabs\Tab::make('Category ve Stock')
                            ->schema([
                                Forms\Components\TextInput::make('sku')
                                    ->label('SKU')
                                    ->required()
                                    ->maxLength(255),
                                Forms\Components\Select::make('category')
                                    ->label('Category')
                                    ->options(fn() => Category::pluck('name', 'id')->toArray())
                                    ->required(),
                            ]),

                        Forms\Components\Tabs\Tab::make('Features')
                            ->schema([
                                Forms\Components\TagsInput::make('tags')
                                    ->columnSpanFull(),

                                Forms\Components\Select::make('colors')
                                    ->options(fn() => Color::pluck('name', 'id')->toArray())
                                    ->required()
                                    ->multiple()
                                    ->preload()
                                    ->columnSpanFull(),

                                Forms\Components\Select::make('sizes')
                                    ->options(fn() => collect(Size::cases())
                                        ->mapWithKeys(fn($size) => [$size->value => $size->value])
                                        ->toArray())
                                    ->columnSpanFull()
                                    ->required()
                                    ->preload()
                                    ->multiple()
                                    ->native(false),


                                Forms\Components\Repeater::make('features')
                                    ->schema([
                                        Forms\Components\TextInput::make('key'),
                                        Forms\Components\TextInput::make('value'),
                                    ])
                                    ->columnSpanFull(),
                            ]),

                        Forms\Components\Tabs\Tab::make('Malzeme ve Bakım')
                            ->schema([
                                Forms\Components\TextInput::make('fabric_type')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('care_instructions')
                                    ->maxLength(255)
                                    ->default(null),
                                Forms\Components\TextInput::make('occasion_type')
                                    ->maxLength(255)
                                    ->default(null),
                            ]),

                        Forms\Components\Tabs\Tab::make('Design Details')
                            ->schema([
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
                            ]),

                        Forms\Components\Tabs\Tab::make('Images')
                            ->schema([
                                Forms\Components\FileUpload::make('images')
                                    ->multiple()
                                    ->required()
                                    ->image()
                                    ->disk('public')
                                ->directory('products'),
                            ]),
                    ])->columnSpanFull(),
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
                Tables\Columns\IconColumn::make('is_on_sale')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sale_percentage')
                    ->numeric()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->defaultSort('created_at', 'desc')
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
            ]);
    }

    public static function getRelations(): array
    {
        return [
          RelationManagers\ImagesRelationManager::class,
          RelationManagers\ColorRelationManager::class
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
