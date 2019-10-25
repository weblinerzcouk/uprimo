<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mod_ad_images extends Model
{
    protected  $table = 'ad_images';
    public function getads()
    {
        return $this->belongsTo(Mod_ad_images::class,'ad');
    }
}
