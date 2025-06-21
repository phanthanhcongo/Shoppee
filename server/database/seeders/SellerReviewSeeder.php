<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SellerOrder;
use App\Models\SellerReview;

class SellerReviewSeeder extends Seeder
{
    public function run(): void
    {
        $orders = SellerOrder::all();

        foreach ($orders as $order) {
            SellerReview::factory()->create([
                'seller_order_id' => $order->id,
            ]);
        }
    }
}
