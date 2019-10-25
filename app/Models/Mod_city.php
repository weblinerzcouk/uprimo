<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mod_city extends Model
{
    protected $table = 'city';
    use SoftDeletes;
}
