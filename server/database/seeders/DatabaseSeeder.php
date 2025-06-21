<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
{
    // 🧱 Bảng nền tảng
    $this->call(UserSeeder::class);
    $this->call(UserdetailSeeder::class);
    $this->call(UserloginhistorySeeder::class);
    $this->call(ReportTypeSeeder::class);
    $this->call(CategorySeeder::class);
    $this->call(SubcategorySeeder::class);

    // 👥 Vai trò người dùng (phụ thuộc users)
    $this->call(CustomerSeeder::class);
    $this->call(SellerSeeder::class);
    $this->call(ShipperSeeder::class);

    // 🛒 Sản phẩm & khuyến mãi (phụ thuộc seller, subcategory)
    $this->call(ProductSeeder::class);
    $this->call(ProductvariantSeeder::class);
    $this->call(ProductImageSeeder::class);
    $this->call(PromotionSeeder::class);
    $this->call(ProductPromotionSeeder::class);
    $this->call(ProductReviewSeeder::class);

    // ⚡ Flash Sale
    $this->call(FlashSaleSeeder::class);

    // 🛍️ Cart, Wishlist
    $this->call(CartSeeder::class);
    $this->call(CartItemSeeder::class);
    $this->call(WishlistSeeder::class);

    // 🚚 Đơn hàng & giao hàng
    $this->call(DeliveryAddressSeeder::class);
    $this->call(OrderSeeder::class);
    $this->call(OrderItemSeeder::class);
    $this->call(SellerOrderSeeder::class);
    $this->call(DeliverySeeder::class);
    $this->call(DeliveryTrackingSeeder::class);
    $this->call(ShipperFeedbackSeeder::class);
    $this->call(SellerReviewSeeder::class);

    // 🗣️ Giao tiếp & hệ thống
    $this->call(ChatSessionSeeder::class);
    $this->call(MessageSeeder::class);
    $this->call(MessageAttachmentSeeder::class);
    $this->call(NotificationSeeder::class);
    $this->call(AdminLogSeeder::class);
    $this->call(ReportSeeder::class);

    // 🎁 Voucher & Khách hàng
    $this->call(VoucherSeeder::class);
    $this->call(VoucherAssignmentSeeder::class);
    $this->call(RewardTransactionSeeder::class);
    $this->call(CustomerLevelSeeder::class);
}

}
