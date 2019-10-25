<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mod_attributes extends Model
{
    protected $table = 'attributes';
    use SoftDeletes;
    public function getcategacc()
    {
        return $this->belongsTo(Mod_category::class);
    }
    public function getsubcategacc()
    {
        return $this->belongsTo(Mod_sub_category::class);
    }
}
