<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellerReview extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'seller_reviews';

    protected $fillable = [
        'seller_order_id',
        'customer_id',
        'rating',
        'comment',
        'created_at',
    ];

    public function sellerOrder()
    {
        return $this->belongsTo(SellerOrder::class, 'seller_order_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
