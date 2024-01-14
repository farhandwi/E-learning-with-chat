<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{

    use HasFactory;

    protected $fillable=[
        'sender_id',
        'receiver_id',
        'last_time_message',
        'conversation_id',
        'read',
        'body',
    ];


    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
        # code...
    }

    public function mahasiswa( )
    {
        return $this->belongsTo(Mahasiswa::class ,'sender_id');
        # code...
    }
   
}
