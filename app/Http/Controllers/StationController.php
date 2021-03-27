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
        $stations = Station::with('user')->orderBy('nom', 'ASC')->get();
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
            'user_id' => ['required'],
            'adresse' => ['required', 'string'],
        ]);

        $station = new Station();

        $station->nom = $request->nom;
        $station->departement = $request->departement;
        $station->region = $request->region;
        $station->user_id = $request->user_id;
        $station->adresse = $request->adresse;
        

        $station->save();
        
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
        $station = Station::where('id', $id)->first();

        return view('editStation', [
            'station' => $station,
            'page' => 'editStation'
        ]);
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
        $station = Station::where('id', $id)->first();

        $request->validate([
            'nom' => ['required', 'string'],
            'departement' => ['required', 'string'],
            'region' => ['required', 'string'],
            'user_id' => ['required'],
            'adresse' => ['required', 'string'],
        ]);

        $station->nom = $request->nom;
        $station->departement = $request->departement;
        $station->region = $request->region;
        $station->user_id = $request->user_id;
        $station->adresse = $request->adresse;

        $station->save();

        Session::flash('message', 'Modification réussie');
        
        return redirect()->route('station');
        }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $station = Station::where('id', $id)->first();

        $station->delete();

        Session::flash('message', 'Suppression réussie');
        
        return redirect()->route('station');
    }
}
