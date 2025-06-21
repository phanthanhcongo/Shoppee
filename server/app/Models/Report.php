<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'reports';

    protected $fillable = [
        'user_id',
        'report_type_id',
        'description',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function type()
    {
        return $this->belongsTo(ReportType::class, 'report_type_id', 'report_type_id');
    }
}
