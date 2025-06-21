<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryTracking extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'delivery_tracking';

    protected $fillable = [
        'delivery_id',
        'status',
        'timestamp',
    ];

    public function delivery()
    {
        return $this->belongsTo(Delivery::class, 'delivery_id');
    }
}
