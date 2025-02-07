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
        Schema::table('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->decimal('price', 10, 2);
            $table->decimal('discounted_price', 10, 2)->nullable();
            $table->string('sku')->unique();
            $table->string('category');
            $table->json('tags')->nullable();
            $table->json('colors')->nullable();
            $table->json('sizes')->nullable();
            $table->json('features')->nullable();
            $table->string('fabric_type')->nullable();
            $table->string('care_instructions')->nullable();
            $table->string('occasion_type')->nullable();
            $table->string('sleeve_type')->nullable();
            $table->string('pattern')->nullable();
            $table->string('closure_type')->nullable();
            $table->string('origin_country')->nullable();
            $table->boolean('is_on_sale')->default(false);
            $table->decimal('sale_percentage', 5, 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
