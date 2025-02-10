<?php

namespace App\Http\Controllers\Api\V1\Shop;

use App\Http\Resources\ShopResource;
use App\Models\Product;

class All
{
    public function getAll()
    {
        $products = Product::query()
            ->with('images')
            ->get();

        return ShopResource::collection($products);
    }
    public function details($id){
        $product = Product::query()->findOrFail($id);
        return new ShopResource($product);
    }


}
