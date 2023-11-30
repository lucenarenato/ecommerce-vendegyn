<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;
use Database\Factories\ProductFactory; // Importe a factory correspondente
use Database\Factories\ProductImageFactory;
use App\Models\ProductImage;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Product::factory(30)->create();
        //Product::factory()->count(10)->create();
        ProductImage::factory()->count(5)->create();
        DB::table('product_images')->insert(ProductImage::factory()->count(5)->make()->toArray());
        $productImages = ProductImage::factory()->count(5)->make();
        dd($productImages);



    }
}
