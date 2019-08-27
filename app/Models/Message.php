<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'title', 'message', 'is_read'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
