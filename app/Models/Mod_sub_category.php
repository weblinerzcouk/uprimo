<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mod_sub_category extends Model
{
    protected $table = 'sub_category';
    public function getads()
    {
        return $this->hasMany(Mod_post_ad::class,'sub_category','id');
    }
    public function getcatgacc()
    {
        return $this->belongsTo(Mod_category::class,'category');
    }
    public function atributesacc()
    {
        return $this->hasMany(Mod_attributes::class,'sub_category','id');
    }
}
