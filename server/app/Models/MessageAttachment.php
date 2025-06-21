<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageAttachment extends Model
{
    use HasFactory;
    protected $table = 'message_attachments';

    public $timestamps = false;

    protected $fillable = [
        'message_id',
        'file_url',
    ];

    public function message()
    {
        return $this->belongsTo(Message::class, 'message_id');
    }
}
