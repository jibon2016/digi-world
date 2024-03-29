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
        Schema::create('processors', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable();
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->bigInteger('item_code')->unique();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('model');
            $table->decimal('regular_price');
            $table->string('image');
            $table->string('base_frequency');
            $table->string('max_turbo_frequency');
            $table->string('cache')->nullable();
            $table->string('cores')->nullable();
            $table->string('threads')->nullable();
            $table->string('tdp')->nullable();
            $table->string('memory_max_size')->nullable();
            $table->string('memory_max_speed')->nullable();
            $table->string('memory_type')->nullable();
            $table->string('memory_max_channels')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('processors');
    }
};
