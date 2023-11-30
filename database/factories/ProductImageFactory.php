<?php

namespace Database\Factories;

use App\Models\ProductImage;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    protected $model = ProductImage::class;

    public function definition()
    {
        return [
            'product_id' => function () {
                return Product::factory()->create()->id;
            },
            'path' => fake()->imageUrl(), // Substitua isso pela lógica para gerar o caminho real da imagem
            'url' => fake()->imageUrl(), // Substitua isso pela lógica para gerar a URL real da imagem
            'mime' => fake()->mimeType,
            'size' => fake()->numberBetween(1000, 9000),
            'position' => fake()->numberBetween(1, 10),
        ];
    }
}
