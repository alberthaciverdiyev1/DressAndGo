<?php

namespace App\Http\Controllers\Api\V1\Brand;

use App\Http\Resources\BrandResource;
use App\Models\Brand;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class All
{
    public function getAll(): AnonymousResourceCollection
    {
        $brands = Brand::whereNull('deleted_at')->get();
        return BrandResource::collection($brands);
    }
}
