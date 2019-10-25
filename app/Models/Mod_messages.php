<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mod_messages extends Model
{
    protected $table    = 'messages';
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function receivers()
    {
        return $this->hasMany(User::class,'id','receiver_id');
    }
}
