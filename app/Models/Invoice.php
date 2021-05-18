<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'date_generate',
        'time_generate',
        'req_id'
        
    ];

    public function req()
    {
        return $this->belongsTo(Req::class);
    }
}
