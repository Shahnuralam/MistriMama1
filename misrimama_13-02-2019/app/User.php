<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function roles()
    {
        return $this->belongsToMany('App\Models\roles', 'user_roles');
    }
    public function hasRole($check)
    {
        return in_array($check, array_pluck($this->roles->toArray(), 'role'));
    }
    public function sp() {
        return $this->hasOne('App\Models\service_providers', 'u_id', 'id');
    }
}
