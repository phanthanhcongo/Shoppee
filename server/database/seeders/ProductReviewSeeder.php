<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Customer;
use App\Models\ProductReview;

class ProductReviewSeeder extends Seeder
{
    public function run(): void
    {
        $products = Product::all();
        $customers = Customer::all();

        foreach ($products as $product) {
            $sampleCustomers = $customers->random(3); // mỗi sản phẩm được 3 người đánh giá

            foreach ($sampleCustomers as $customer) {
                ProductReview::factory()->create([
                    'product_id' => $product->id,
                    'customer_id' => $customer->id,
                ]);
            }
        }
    }
}
