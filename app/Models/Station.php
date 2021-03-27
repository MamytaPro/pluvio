<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'departement',
        'region',
        'user_id',
        'adresse',
    ];
    public function user(){
    return $this->belongsTo(User::class,'user_id');
    }

    public function releves()
    {
        return $this->hasMany(Revele::class);
    }
}
