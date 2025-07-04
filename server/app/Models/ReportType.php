<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReportType extends Model
{
    use HasFactory;
    protected $table = 'report_types';
    public $timestamps = false;

    protected $fillable = ['type_name'];
}
