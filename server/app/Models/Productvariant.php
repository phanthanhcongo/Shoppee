<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productvariant extends Model
{
    use HasFactory;
    protected $table = 'product_variants';


    protected $fillable = [
        'product_id',
        'variant_name',
        'original_price',
        'final_price',
        'stock_quantity',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
