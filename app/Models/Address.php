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
        'type',
        'city_id',
        'req_id'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}
