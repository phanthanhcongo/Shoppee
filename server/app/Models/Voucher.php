<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;
    protected $table = 'vouchers';

    public $timestamps = false;

    protected $fillable = [
        'code',
        'discount_percent',
        'start_date',
        'end_date',
    ];
}
