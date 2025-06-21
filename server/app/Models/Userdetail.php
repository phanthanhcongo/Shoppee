<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
    use HasFactory;

    protected $table = 'userdetails';

    protected $fillable = [
        'user_id',
        'full_name',
        'phone_number',
        'gender',
        'birth_date',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

