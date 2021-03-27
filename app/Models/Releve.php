<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Releve extends Model
{
    use HasFactory;

    protected $table = "releves";

    protected $fillable=[
        'date',
        'quantite',
        'temperature',
        'station_id'
    ];

    public function station()
    {
        return $this->belongsTo(Station::class, 'station_id');
    }
}
