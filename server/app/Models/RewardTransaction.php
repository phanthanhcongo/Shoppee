<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RewardTransaction extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'reward_transactions';

    protected $fillable = [
        'customer_id',
        'points',
        'description',
        'created_at',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}
