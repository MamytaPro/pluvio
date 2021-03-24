<?php

namespace App\Http\Controllers;

use App\Models\Station;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class StationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stations = Station::with('User');
        return view('station', [
            'page' => 'station',
            'stations' => $stations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => ['required', 'string'],
            'departement' => ['required', 'string'],
            'region' => ['required', 'string'],
            'tech_id' => ['required', 'int'],
            'adresse' => ['required', 'string'],
        ]);

        $station = new Station();

        $station->nom = $request->nom;
        $station->departement = $request->departement;
        $station->region = $request->region;
        $station->tech_id = $request->Auth::user()->Id;
        $station->adresse = $request->adresse;
        

        $station->save();


        if (Auth::user()) {
            Session::flash('message', 'Ajout réussi');
        } 
        
        return redirect()->route('station');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
