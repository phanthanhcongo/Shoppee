<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'orders';

    protected $fillable = [
        'customer_id',
        'address_id',
        'total_amount',
        'status',
        'created_at',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function deliveryAddress()
    {
        return $this->belongsTo(DeliveryAddress::class, 'address_id');
    }
}
