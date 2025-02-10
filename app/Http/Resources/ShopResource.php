<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'images' => $this->images->map(function ($image) {
                return '/storage/' . $image->image;
            })->toArray(),
            'price'=>$this->price,
            'discounted_price'=>$this->discounted_price

        ];
    }
}
