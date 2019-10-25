<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mod_category extends Model
{
    protected $table = 'category';
    use SoftDeletes;

    public function subcatgacc()
    {
        return $this->hasMany(Mod_sub_category::class,'category','id');
    }
    public function adacc()
    {
        return $this->hasMany(Mod_post_ad::class,'category','id');
    }
    public function atributesacc()
    {
        return $this->hasMany(Mod_attributes::class,'category','id');
    }
}
