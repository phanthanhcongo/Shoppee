<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'notifications';

    protected $fillable = [
        'user_id',
        'content',
        'read_status',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
