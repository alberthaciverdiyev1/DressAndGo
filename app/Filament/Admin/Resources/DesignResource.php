<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\DesignResource\Pages;
use App\Filament\Admin\Resources\DesignResource\RelationManagers;
use App\Models\Design;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DesignResource extends Resource
{
    protected static ?string $model = Design::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\FileUpload::make('home_slide_1_image')
                    ->image(),
                Forms\Components\TextInput::make('home_slide_1_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('home_slide_1_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('home_slide_2_image')
                    ->image(),
                Forms\Components\TextInput::make('home_slide_2_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('home_slide_2_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('home_slide_3_image')
                    ->image(),
                Forms\Components\TextInput::make('home_slide_3_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('home_slide_3_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\Textarea::make('home_slide_bottom_banner')
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('home_rent_cloth_image')
                    ->image(),
                Forms\Components\TextInput::make('home_rent_cloth_percent')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('home_rent_cloth_text')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('home_buy_cloth_image')
                    ->image(),
                Forms\Components\TextInput::make('home_buy_cloth_percent')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('home_buy_cloth_text')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_1_icon')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_1_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_1_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_2_icon')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_2_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_2_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_3_icon')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_3_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_3_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_4_icon')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_4_name')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('how_it_work_4_description')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('deal_of_the_week_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('deal_of_the_week_image')
                    ->image(),
                Forms\Components\DateTimePicker::make('deal_of_the_week_end_time'),
                Forms\Components\TextInput::make('subscribe_us_text')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('subscribe_us_image')
                    ->image(),
                Forms\Components\FileUpload::make('sale_banner_image')
                    ->image(),
                Forms\Components\FileUpload::make('sale_left_bottom_image')
                    ->image(),
                Forms\Components\TextInput::make('sale_left_bottom_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sale_left_bottom_percent')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('sale_left_bottom_text')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\FileUpload::make('cart_banner_image')
                    ->image(),
                Forms\Components\FileUpload::make('blog_banner_image')
                    ->image(),
                Forms\Components\FileUpload::make('about_banner_image')
                    ->image(),
                Forms\Components\FileUpload::make('blog_right_side_image')
                    ->image(),
                Forms\Components\TextInput::make('blog_right_side_title')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('blog_right_side_percent')
                    ->maxLength(255)
                    ->default(null),
                Forms\Components\TextInput::make('blog_right_side_text')
                    ->maxLength(255)
                    ->default(null),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('home_slide_1_image'),
                Tables\Columns\TextColumn::make('home_slide_1_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_slide_1_description')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('home_slide_2_image'),
                Tables\Columns\TextColumn::make('home_slide_2_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_slide_2_description')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('home_slide_3_image'),
                Tables\Columns\TextColumn::make('home_slide_3_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_slide_3_description')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('home_rent_cloth_image'),
                Tables\Columns\TextColumn::make('home_rent_cloth_percent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_rent_cloth_text')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('home_buy_cloth_image'),
                Tables\Columns\TextColumn::make('home_buy_cloth_percent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('home_buy_cloth_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_1_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_1_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_1_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_2_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_2_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_2_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_3_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_3_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_3_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_4_icon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_4_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('how_it_work_4_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deal_of_the_week_title')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('deal_of_the_week_image'),
                Tables\Columns\TextColumn::make('deal_of_the_week_end_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('subscribe_us_text')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('subscribe_us_image'),
                Tables\Columns\ImageColumn::make('sale_banner_image'),
                Tables\Columns\ImageColumn::make('sale_left_bottom_image'),
                Tables\Columns\TextColumn::make('sale_left_bottom_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sale_left_bottom_percent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sale_left_bottom_text')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('cart_banner_image'),
                Tables\Columns\ImageColumn::make('blog_banner_image'),
                Tables\Columns\ImageColumn::make('about_banner_image'),
                Tables\Columns\ImageColumn::make('blog_right_side_image'),
                Tables\Columns\TextColumn::make('blog_right_side_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blog_right_side_percent')
                    ->searchable(),
                Tables\Columns\TextColumn::make('blog_right_side_text')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListDesigns::route('/'),
            'create' => Pages\CreateDesign::route('/create'),
            'edit' => Pages\EditDesign::route('/{record}/edit'),
        ];
    }
}
