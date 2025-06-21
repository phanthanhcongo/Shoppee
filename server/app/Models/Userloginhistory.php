<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userloginhistory extends Model
{
    use HasFactory;

    protected $table = 'userloginhistory';

    protected $fillable = [
        'user_id',
        'login_time',
        'ip_address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
