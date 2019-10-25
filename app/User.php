<?php

namespace App;

use App\Models\Mod_messages;
use App\Models\Mod_packages;
use App\Models\Mod_post_ad;
use App\Models\Mod_user_feedback;
use App\Models\Mod_whishlist;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','address','city','I_m','phone_no','pic', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function ads()
    {
        return $this->hasMany(Mod_post_ad::class,'user','id');
    }
    public function whishlistacc()
    {
        return $this->hasMany(Mod_whishlist::class,'user','id');
    }
    public function usrfeedbacksacc()
    {
        return $this->hasMany(Mod_user_feedback::class,'user','id');
    }
    public function packages()
    {
        return $this->hasOne(Mod_packages::class,'id','package');
    }
    public function messages()
    {
        return $this->hasMany(Mod_messages::class);
    }
}
