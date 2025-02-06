<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Design extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'home_slide_1_image',
        'home_slide_1_title',
        'home_slide_1_description',
        'home_slide_2_image',
        'home_slide_2_title',
        'home_slide_2_description',
        'home_slide_3_image',
        'home_slide_3_title',
        'home_slide_3_description',
        'home_slide_bottom_banner',
        'home_rent_cloth_image',
        'home_rent_cloth_percent',
        'home_rent_cloth_text',
        'home_buy_cloth_image',
        'home_buy_cloth_percent',
        'home_buy_cloth_text',
        'how_it_work_1_icon',
        'how_it_work_1_name',
        'how_it_work_1_description',
        'how_it_work_2_icon',
        'how_it_work_2_name',
        'how_it_work_2_description',
        'how_it_work_3_icon',
        'how_it_work_3_name',
        'how_it_work_3_description',
        'how_it_work_4_icon',
        'how_it_work_4_name',
        'how_it_work_4_description',
        'deal_of_the_week_title',
        'deal_of_the_week_image',
        'deal_of_the_week_end_time',
        'subscribe_us_text',
        'subscribe_us_image',
        'sale_banner_image',
        'sale_left_bottom_image',
        'sale_left_bottom_title',
        'sale_left_bottom_percent',
        'sale_left_bottom_text',
        'cart_banner_image',
        'blog_banner_image',
        'about_banner_image',
        'blog_right_side_image',
        'blog_right_side_title',
        'blog_right_side_percent',
        'blog_right_side_text',
    ];
}

