<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $table = 'sellers';


    protected $fillable = [
        'user_id',
        'shop_name',
        'shop_description',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
