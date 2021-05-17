<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'state_id'
    ];

    // each and every category belongs to a service
    public function service(){
        return $this->hasMany(Service::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

    public function address(){
        return $this->hasMany(Address::class);
    }

}
