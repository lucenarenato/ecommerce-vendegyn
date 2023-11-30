<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->text(), //'title' => fake()->text(),
            'slug' => fake()->text(),
            // 'image' => fake()->imageUrl(),
            'description' => fake()->realText(2000),
            'price' => fake()->randomFloat(2, 10, 100),
            'published' => fake()->boolean(),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
            'updated_by' => 1,
        ];
    }


    // public function definition()
    // {
    //     return [
    //         'title' => $this->faker->sentence,
    //         'slug' => $this->faker->sentence,
    //         'description' => $this->faker->paragraph,
    //         'price' => $this->faker->randomFloat(2, 10, 100),
    //         'quantity' => $this->faker->randomNumber(2),
    //         'published' => $this->faker->boolean,
    //         'created_by' => 1, // Replace with your user ID or logic to get user ID
    //         'updated_by' => 1, // Replace with your user ID or logic to get user ID
    //     ];
    // }

    public function configure()
    {
        return $this->afterCreating(function (Product $product) {
            // Attach images to the product
            $product->images()->saveMany(ProductImage::factory(3)->make());

            // Attach categories to the product
            $categories = Category::inRandomOrder()->take(2)->get();
            $product->categories()->attach($categories);
        });
    }
}

