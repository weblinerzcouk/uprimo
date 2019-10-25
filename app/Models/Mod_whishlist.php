<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mod_whishlist extends Model
{
    protected $table = 'whishlist';
    public function getads()
    {
        return $this->belongsTo(Mod_post_ad::class,'ad');
    }
    public function getuserac()
    {
        return $this->belongsTo(User::class,'user');
    }
}
