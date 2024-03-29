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
        Schema::create('motherboards', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id');
            $table->foreign('product_id')->on('products')->references('id')->cascadeOnDelete();
            $table->foreignId('category_id');
            $table->foreign('category_id')->on('categories')->references('id')->cascadeOnDelete();
            $table->foreignId('brand_id')->nullable();
            $table->foreign('brand_id')->on('brands')->references('id')->cascadeOnDelete();
            $table->string('slug')->unique();
            $table->string('name');
            $table->decimal('regular_price');
            $table->bigInteger('item_code')->unique();
            $table->string('image');
            $table->text('supported_cpu')->nullable();
            $table->string('chipset')->nullable();
            $table->string('bios')->nullable();
            $table->string('form_factor')->nullable();
            $table->string('audio')->nullable();
            $table->string('pci')->nullable();
            $table->string('memory_type')->nullable();
            $table->string('memory_slot')->nullable();
            $table->text('memory_supported')->nullable();
            $table->string('memory_max')->nullable();
            $table->text('graphics_card')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motherboards');
    }
};
