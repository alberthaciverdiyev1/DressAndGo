<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('phone_3')->nullable();
            $table->string('mail')->nullable();
            $table->string('logo')->nullable();
            $table->string('favicon')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('linkedin_url')->nullable();
            $table->string('tiktok_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->boolean('hide_product_category_from_navbar')->default(false);
            $table->boolean('hide_slider_area')->default(false);
            $table->boolean('hide_slider_bottom_banner')->default(false);
            $table->boolean('hide_top_categories_area')->default(false);
            $table->boolean('hide_buy_and_rent_area')->default(false);
            $table->boolean('hide_our_features_collection_sale_area')->default(false);
            $table->boolean('hide_our_features_collection_rent_area')->default(false);
            $table->boolean('hide_how_it_work_area')->default(false);
            $table->boolean('hide_trending_area')->default(false);
            $table->boolean('hide_deal_of_week_area')->default(false);
            $table->boolean('hide_what_clients_say_area')->default(false);
            $table->boolean('hide_blogs_area')->default(false);
            $table->boolean('hide_subscribe_us_area')->default(false);
            $table->boolean('hide_recent_blogs_from_footer')->default(false);
            $table->boolean('hide_home_page')->default(false);
            $table->boolean('hide_shop_page')->default(false);
            $table->boolean('hide_rent_page')->default(false);
            $table->boolean('hide_blog_page')->default(false);
            $table->boolean('hide_about_page')->default(false);
            $table->boolean('hide_contact_page')->default(false);
            $table->boolean('hide_FAQ_page')->default(false);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
