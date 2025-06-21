<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryAddress extends Model
{
    use HasFactory;
    protected $table = 'delivery_addresses';

    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'recipient_name',
        'phone',
        'address',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
