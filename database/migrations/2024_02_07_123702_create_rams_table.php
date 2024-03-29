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
        Schema::create('rams', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable();
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('type');
            $table->string('capacity');
            $table->string('image');
            $table->decimal('regular_price');
            $table->string('frequency')->nullable();
            $table->string('operating_voltage')->nullable();
            $table->string('latency')->nullable();
            $table->string('dimension')->nullable();
            $table->string('pin')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rams');
    }
};
