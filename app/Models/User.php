<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'rol_id',
        'img'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol(){
        return $this->belongsTo('Ozparr\AdminlteUsers\Models\Rol');
    }

    public function customers(){
        return $this->hasMany('App\Models\Customer');
    }

    public function getImgAttribute($value)
    {
        return 'storage/img/users/' . $value;
    }

    /**
     * @var array $roles
     * @return bool
     */
    public function areRol($roles){
        foreach ($roles as $rol){
            if($this->rol->nombre == $rol ){
                return true;
            }
        }
        return false;
    }
}
