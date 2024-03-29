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
        Schema::create('desktops', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable();
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('model');
            $table->string('processor');
            $table->string('motherboard');
            $table->string('ram');
            $table->string('graphics_card')->nullable();
            $table->string('storage');
            $table->string('monitor')->nullable();
            $table->string('casing')->nullable();
            $table->string('power_supply')->nullable();
            $table->string('image')->nullable();
            $table->decimal('regular_price')->nullable();
            $table->decimal('discount_price')->nullable();
            $table->decimal('offer_price')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desktops');
    }
};
