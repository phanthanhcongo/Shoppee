<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerLevel extends Model
{
    use HasFactory;
    protected $table = 'customerlevels';

    public $timestamps = false;

    protected $fillable = [
        'customer_id',
        'level_name',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}
