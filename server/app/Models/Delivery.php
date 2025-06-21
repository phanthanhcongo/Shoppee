<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'deliveries';

    protected $fillable = [
        'order_id',
        'shipper_id',
        'delivery_status',
        'assigned_at',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function shipper()
    {
        return $this->belongsTo(Shipper::class, 'shipper_id');
    }
}
