<?php

namespace App\Filament\Admin\Resources\ProductResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ColorRelationManager extends RelationManager
{
    protected static string $relationship = 'colors';

    public function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('color_id')
            ->relationship('colors', 'name')
                ->required()
                ->searchable(),

            Forms\Components\TextInput::make('pivot.stock')
            ->numeric()
                ->default(0)
                ->required(),
        ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Color Name'),
                Tables\Columns\ColorColumn::make('code')->label('Color Code'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\AttachAction::make()
                ->form([
                    Forms\Components\Select::make('color_id')
                        ->relationship('colors', 'name')
                        ->required(),
                ]),
            ])
            ->actions([
                Tables\Actions\DetachAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DetachBulkAction::make(),
            ]);
    }
}
