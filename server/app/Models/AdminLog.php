<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    use HasFactory;
    protected $table = 'adminlogs';

    public $timestamps = false;

    protected $fillable = [
        'admin_id',
        'action',
        'created_at',
    ];

    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }
}
