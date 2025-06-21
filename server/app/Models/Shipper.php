<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    use HasFactory;
    protected $table = 'shippers';


    protected $fillable = [
        'user_id',
        'company_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
