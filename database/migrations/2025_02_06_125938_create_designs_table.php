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
        Schema::create('designs', function (Blueprint $table) {
            $table->id();
            $table->string('home_slide_1_image')->nullable();
            $table->string('home_slide_1_title')->nullable();
            $table->string('home_slide_1_description')->nullable();
            $table->string('home_slide_2_image')->nullable();
            $table->string('home_slide_2_title')->nullable();
            $table->string('home_slide_2_description')->nullable();
            $table->string('home_slide_3_image')->nullable();
            $table->string('home_slide_3_title')->nullable();
            $table->string('home_slide_3_description')->nullable();
            $table->longText('home_slide_bottom_banner')->nullable();
            $table->string('home_rent_cloth_image')->nullable();
            $table->string('home_rent_cloth_percent')->nullable();
            $table->string('home_rent_cloth_text')->nullable();
            $table->string('home_buy_cloth_image')->nullable();
            $table->string('home_buy_cloth_percent')->nullable();
            $table->string('home_buy_cloth_text')->nullable();
            $table->string('how_it_work_1_icon')->nullable();
            $table->string('how_it_work_1_name')->nullable();
            $table->string('how_it_work_1_description')->nullable();
            $table->string('how_it_work_2_icon')->nullable();
            $table->string('how_it_work_2_name')->nullable();
            $table->string('how_it_work_2_description')->nullable();
            $table->string('how_it_work_3_icon')->nullable();
            $table->string('how_it_work_3_name')->nullable();
            $table->string('how_it_work_3_description')->nullable();
            $table->string('how_it_work_4_icon')->nullable();
            $table->string('how_it_work_4_name')->nullable();
            $table->string('how_it_work_4_description')->nullable();
            $table->string('deal_of_the_week_title')->nullable();
            $table->string('deal_of_the_week_image')->nullable();
            $table->dateTime('deal_of_the_week_end_time')->nullable();
            $table->string('subscribe_us_text')->nullable();
            $table->string('subscribe_us_image')->nullable();
            //shop
            $table->string('sale_banner_image')->nullable();
            $table->string('sale_left_bottom_image')->nullable();
            $table->string('sale_left_bottom_title')->nullable();
            $table->string('sale_left_bottom_percent')->nullable();
            $table->string('sale_left_bottom_text')->nullable();
            $table->string('cart_banner_image')->nullable();
            $table->string('blog_banner_image')->nullable();
            $table->string('about_banner_image')->nullable();
            $table->string('blog_right_side_image')->nullable();
            $table->string('blog_right_side_title')->nullable();
            $table->string('blog_right_side_percent')->nullable();
            $table->string('blog_right_side_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('designs');
    }
};
