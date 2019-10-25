<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mod_packages extends Model
{
    protected $table  = 'packages';
    use SoftDeletes;
    public function useracc()
    {
        return $this->belongsTo(User::class);
    }
}
