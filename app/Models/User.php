<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'role'
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

    public function isAdmin()
    {
        return $this->role == 'admin';
    }

    public function isClient()
    {
        return $this->role == 'client';
    }

    public function isRunner()
    {
        return $this->role == 'runner';
    }


    // 1 user (client) can create many services
    public function services()
    {
        return $this->hasMany(Service::class);
    }

    // 1 user (client) can has one wallet
    public function wallet()
    {
        return $this->hasOne(Wallet::class);
    }

    // 1 user (runner) can has one wallet
    public function bank()
    {
        return $this->hasOne(Bank::class);
    }

    // 1 user (client) can has many requests
    public function reqs()
    {
        return $this->hasMany(Req::class);
    }
}
