<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Mutator Merubah data inputan dari ucwords to strtolower
     */
    public function setEmailAttribute($email) 
    {
        $this->attributes['email'] = strtolower($email);
    }

    public function setFirstNameAttribute($first_name) 
    {
        $this->attributes['first_name'] = ucfirst($first_name);
    }

    public function setLastNameAttribute($last_name) 
    {
        $this->attributes['last_name'] = ucfirst($last_name);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'level', 'email', 'password', 'term',
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
        'term' => 'boolean',
    ];
}
