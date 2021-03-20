<?php

namespace App\Http\Controllers;

use App\Models\Station;
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
            'nom' => ['required', 'string', 'max:255'],
            'departement' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'region' => ['required', 'string'],
            'tech_id' => ['required', 'string'],
            'adresse' => ['required', 'string'],
        ]);

        $station = new Sation();

        $station->nom = $request->nom;
        $station->departement = $request->departement;
        $station->region = $request->region;
        $station->tech_id = $request->Auth::user('id');
        $station->adresse = $request->adresse;
        

        $station->save();


        if (Auth::user()->role === 'Admin') {
            Session::flash('message', 'Ajout réussi');
        } else {
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
