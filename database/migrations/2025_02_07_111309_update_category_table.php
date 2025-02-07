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
        Schema::table('categories', function (Blueprint $table) {
            $table->string('name')->nullable()->after('id');
            $table->string('parent_id')->nullable()->after('id');
            $table->string('slug')->nullable()->after('id');
            $table->string('image')->nullable()->after('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('parent_id');
            $table->dropColumn('slug');
            $table->dropColumn('image');
        });
    }
};
