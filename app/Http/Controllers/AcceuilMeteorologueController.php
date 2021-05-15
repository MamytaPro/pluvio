<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Station;

class AcceuilMeteorologueController extends Controller
{
   public function index(){

    $nbreTech = User::where('role', 'Technicien')->count();
    $nbrestation = Station::all()->count();
        return view('acceuilMeteorologue', [
            'page' => 'acceuil',
            'tech' => $nbreTech ,
            'stat' =>$nbrestation
        ]);
    }
}
