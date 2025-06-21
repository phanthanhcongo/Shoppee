<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashSale extends Model
{
    use HasFactory;

    protected $table = 'flashsales';
    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'discount_price',
        'start_time',
        'end_time',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
