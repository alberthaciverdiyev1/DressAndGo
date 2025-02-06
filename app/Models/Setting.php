<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'site_name',
        'phone_1',
        'phone_2',
        'phone_3',
        'mail',
        'logo',
        'favicon',
        'instagram_url',
        'facebook_url',
        'linkedin_url',
        'tiktok_url',
        'twitter_url',
        'hide_product_category_from_navbar',
        'hide_slider_area',
        'hide_slider_bottom_banner',
        'hide_top_categories_area',
        'hide_buy_and_rent_area',
        'hide_our_features_collection_sale_area',
        'hide_our_features_collection_rent_area',
        'hide_how_it_work_area',
        'hide_trending_area',
        'hide_deal_of_week_area',
        'hide_what_clients_say_area',
        'hide_blogs_area',
        'hide_subscribe_us_area',
        'hide_recent_blogs_from_footer',
        'hide_home_page',
        'hide_shop_page',
        'hide_rent_page',
        'hide_blog_page',
        'hide_about_page',
        'hide_contact_page',
        'hide_FAQ_page',
    ];
}
