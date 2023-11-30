@extends('layouts.site')

<?php
/** @var \Illuminate\Database\Eloquent\Collection $products */
?>

    <?php if ($products->count() === 0): ?>
        <div class="text-center text-gray-600 py-16 text-xl">
            Não há produtos publicados - There are no products published
        </div>
    <?php else: ?>
    <br>
    <hr>
        <div data-v-0c69e164="" class="flex">
            @foreach($products as $product)
                <!-- Product Item -->
                <div
                    x-data="productItem({{ json_encode([
                        'id' => $product->id,
                        'slug' => $product->slug,
                        'image' => $product->image,
                        'title' => $product->title,
                        'price' => $product->price,
                        'addToCartUrl' => route('cart.add', $product)
                    ]) }})"
                    class="border border-1 border-gray-200 rounded-md hover:border-purple-600 transition-colors bg-white"
                >
                    <a href="{{ route('product.view', $product->slug) }}"
                       class="aspect-w-3 aspect-h-2 block overflow-hidden">
                        <img
                            src="{{ $product->image }}"
                            alt=""
                            class="object-cover rounded-lg hover:scale-105 hover:rotate-1 transition-transform"
                        />
                    </a>
                    <div class="p-4">
                        <h3 class="text-lg">
                            <a href="{{ route('product.view', $product->slug) }}">
                                {{$product->title}}
                            </a>
                        </h3>
                        <h5 class="font-bold">${{$product->price}}</h5>
                    </div>
                    <div class="flex justify-between py-3 px-4">
                        <button class="btn-primary" @click="addToCart()">
                            Add to Cart
                        </button>
                    </div>
                </div>
                <!--/ Product Item -->
            @endforeach
        </div>
        {{$products->links()}}
    <?php endif; ?>

