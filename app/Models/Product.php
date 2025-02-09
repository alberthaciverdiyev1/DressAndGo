<?php

namespace App\Models;

use App\Enums\Size;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'title',
        'short_description',
        'long_description',
        'price',
        'discounted_price',
        'sku',
        'category',
        'tags',
        'sizes',
        'features',
        'fabric_type',
        'care_instructions',
        'occasion_type',
        'sleeve_type',
        'pattern',
        'closure_type',
        'origin_country',
        'is_on_sale',
        'sale_percentage',
    ];
    protected $casts = [
        'tags' => 'array',
        'sizes' => 'array',
        'features' => 'array',
    ];

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product');
    }
    public function sizes(){
        return $this->belongsToMany(Size::class, 'size_product');
    }
    public function categories(){
        return $this->belongsToMany(Category::class, 'category_product');
    }
    public function images()
    {
        return $this->belongsToMany(Image::class, 'image');
    }

}
