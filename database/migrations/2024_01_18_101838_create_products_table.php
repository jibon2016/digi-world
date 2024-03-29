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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreignId('brand_id');
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->bigInteger('item_code')->unique();
            $table->string('type');
            $table->decimal('regular_price');
            $table->boolean('in_stock');
            $table->integer('views');
            $table->integer('sales');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
