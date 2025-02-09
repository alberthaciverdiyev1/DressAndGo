<?php

namespace App\Filament\Admin\Resources\ProductResource\Pages;

use App\Filament\Admin\Resources\ProductResource;
use App\Models\Image;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;

    protected function afterCreate(): void
    {
        $images = collect($this->data['images'])->map(function ($image) {
            return [
                'image' => $image,
                'product_id' => $this->record->id,
            ];
        })->toArray();

        \App\Models\Image::insert($images);
    }
}

