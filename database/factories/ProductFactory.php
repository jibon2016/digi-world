<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $count = Category::query()->count();

        if ($count === 0) {
            $categoryId = Category::factory()->create()->id;
        } else{
            $categoryId = rand(1, $count);
        }
        return [
            'category_id' => $categoryId,
            'name' => fake()->sentence(),
            'slug' => Str::slug(fake()->sentence()),
            'type' => fake()->word(),
            'views' => fake()->randomDigit(),
            'sales' => fake()->randomDigit()
        ];
    }
}
