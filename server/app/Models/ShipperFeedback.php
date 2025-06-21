<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShipperFeedback extends Model
{
    use HasFactory;
    protected $table = 'shipper_feedbacks';

    public $timestamps = false;

    protected $fillable = [
        'delivery_id',
        'customer_id',
        'rating',
        'comment',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
