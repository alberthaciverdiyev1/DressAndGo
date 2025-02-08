<?php

namespace App\Models;

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

    public function colors()
    {
        return $this->belongsToMany(Color::class, 'color_product');
    }

}
