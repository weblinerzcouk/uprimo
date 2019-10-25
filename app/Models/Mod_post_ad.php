<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Mod_post_ad extends Model
{
    protected $table = 'post_ad';
    public function adspics()
    {
        return $this->hasMany(Mod_ad_images::class,'ad','id');
    }
    public function getcatgacc()
    {
        return $this->belongsTo(Mod_category::class,'category');
    }
    public function subcategacc()
    {
        return $this->belongsTo(Mod_sub_category::class,'sub_category');
    }
    public function useracc()
    {
        return $this->belongsTo(User::class,'user');
    }
}
