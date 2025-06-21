<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cart;
use App\Models\CartItem;

class CartItemSeeder extends Seeder
{
    public function run(): void
    {
        $carts = Cart::all();

        foreach ($carts as $cart) {
            CartItem::factory()->count(rand(1, 3))->create([
                'cart_id' => $cart->id,
            ]);
        }
    }
}
