<?php

namespace App\Http\Controllers\Api\V1\Category;

use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class All
{
    public function getAll(): AnonymousResourceCollection
    {
        $categories = Category::whereNull('parent_id')->get();
        return CategoryResource::collection($categories);
    }
}
