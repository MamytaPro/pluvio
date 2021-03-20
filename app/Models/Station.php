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
        'tech_id',
        'adresse',
    ];
    public function User(){
    return $this -> belongsTo(User::class,'tech_id');
    }
}
