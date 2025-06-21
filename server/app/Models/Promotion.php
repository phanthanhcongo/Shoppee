<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    use HasFactory;
    protected $table = 'promotions';

    public $timestamps = false;

    protected $fillable = [
        'seller_id',
        'title',
        'description',
        'discount_percent',
        'start_date',
        'end_date',
    ];

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_id');
    }
}
