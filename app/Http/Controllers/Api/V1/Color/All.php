<?php

namespace App\Http\Controllers\Api\V1\Color;

use App\Http\Resources\ColorResource;
use App\Models\Color;

class All
{
    public function getAll()
    {
        $colors = Color::where('is_active', 1)->get();
        return ColorResource::collection($colors);
    }
}
