<?php

namespace App\Filament\Seller\Resources;

use App\Enums\Size;
use App\Filament\Seller\Resources\ProductResource\Pages;
use App\Models\Color;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Tabs\Tab;
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
                Tabs::make('Məhsul Məlumatları')->tabs([
                    // Ümumi Məlumat Sekmesi
                    Tab::make('Ümumi Məlumat')->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Məhsul Adı')
                            ->required()
                            ->maxLength(255)
                            ->placeholder('Məhsulun adını daxil edin'),
                        Grid::make(2)->schema([

                            Forms\Components\Select::make('category_id')
                                ->label('Kateqoriya')
                                ->relationship('category', 'name')
                                ->required()
                                ->preload()
                                ->searchable()
                                ->placeholder('Kateqoriya seçin'),
                            Forms\Components\Select::make('category_id')
                                ->label('Kateqoriya')
                                ->relationship('category', 'name')
                                ->required()
                                ->preload()
                                ->searchable()
                                ->placeholder('Kateqoriya seçin'),
                        ]),
                        Grid::make(2)->schema([
                            Forms\Components\Select::make('brand')
                                ->label('Brend')
                                ->required()
                                ->relationship('brand', 'name')
                                ->placeholder('Brend seçin'),

                            Forms\Components\Select::make('size')
                                ->label('Ölçü')
                                ->options(array_combine(array_column(Size::cases(), 'value'), array_column(Size::cases(), 'value')))
                                ->required()
                                ->multiple()
                                ->placeholder('Ölçü seçin'),
                        ]),
                        Grid::make(2)->schema([
                            Forms\Components\Select::make('color')
                                ->label('Rəng')
                                ->options(Color::all()->pluck('name', 'code'))
                                ->required()
                                ->multiple()
                                ->placeholder('Rəng seçin'),

                            Forms\Components\Select::make('condition')
                                ->label('Vəziyyəti')
                                ->options([
                                    'Yeni' => 'Yeni',
                                    'Az istifadə olunmuş' => 'Az istifadə olunmuş',
                                    'Çox istifadə olunmuş' => 'Çox istifadə olunmuş',
                                ])
                                ->required()
                                ->placeholder('Vəziyyəti seçin'),
                        ]),
                    ]),
                    // Kiralama Məlumatları Sekmesi
                    Tab::make('Kiralama Məlumatları')->schema([
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('min_rental_duration')
                                ->label('Minimum Kiralama Müddəti (Gün)')
                                ->numeric()
                                ->minValue(1)
                                ->placeholder('Min. kiralama gününü daxil edin'),

                            Forms\Components\TextInput::make('max_rental_duration')
                                ->label('Maksimum Kiralama Müddəti (Gün)')
                                ->numeric()
                                ->minValue(1)
                                ->placeholder('Maks. kiralama gününü daxil edin'),
                        ]),
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('daily_rental_price')
                                ->label('Günlük Kiralama Qiyməti')
                                ->numeric()
                                ->prefix('₼')
                                ->placeholder('Günlük kiralama qiymətini daxil edin'),
                            Forms\Components\TextInput::make('discount_rate')
                                ->label('Endirim Faizi (%)')
                                ->numeric()
                                ->minValue(0)
                                ->maxValue(100)
                                ->placeholder('Endirim faizini daxil edin'),
                        ]),
                        Forms\Components\TextInput::make('stock_quantity')
                            ->label('Stok Miqdarı')
                            ->numeric()
                            ->default(1)
                            ->minValue(0)
                            ->placeholder('Stok miqdarı daxil edin'),
                        Forms\Components\Textarea::make('rental_terms')
                            ->label('Kiralama Şərtləri')
                            ->required()
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->placeholder('Kiralama şərtlərini daxil edin'),
                    ]),

                    // Teslimat & Qaytarılma Sekmesi
                    Tab::make('Teslimat & Qaytarılma')->schema([
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('delivery_time')
                                ->label('Təmin Müddəti')
                                ->required()
                                ->maxLength(100)
                                ->placeholder('Təmin müddətini daxil edin'),

                            Forms\Components\Select::make('delivery_option')
                                ->label('Çatdırılma Seçimi')
                                ->options([
                                    'Kargo' => 'Kargo',
                                    'Əldən təslim' => 'Əldən təslim',
                                ])
                                ->placeholder('Çatdırılma seçimini seçin'),
                        ]),
                        Forms\Components\Textarea::make('return_policy')
                            ->label('Geri Qaytarma Şərtləri')
                            ->required()
                            ->maxLength(500)
                            ->columnSpanFull()
                            ->placeholder('Geri qaytarma şərtlərini daxil edin'),
                    ]),

                    Tab::make(' Şəkillər')->schema([
                        Forms\Components\FileUpload::make('images')
                            ->label('Şəkillər')
                            ->required()
                            ->columnSpanFull()
                    ]),
                ])->columnSpanFull(),
            ]);


    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
