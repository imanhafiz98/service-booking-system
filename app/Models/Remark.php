<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remark extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'notes',
        'attachment',
        'req_id',
        'date_generate',
        'time_generate'
        
    ];

    public function req()
    {
        return $this->belongsTo(Req::class);
    }
}
