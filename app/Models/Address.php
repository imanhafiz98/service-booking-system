<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'line_1',
        'line_2',
        'postcode',
        'notes',
        'city_id'
    
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
