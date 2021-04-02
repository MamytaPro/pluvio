<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Releve;
use App\Models\Station;
use App\Models\Region;


class ReleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releves = Releve::with('station')->orderBy('date', 'DESC')->get();
        return view('releve', [
            'page' => 'releve',
            'releves' => $releves
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
            'date' => ['required'],
            'quantite' => ['required'],
            'region' =>['required'],
            'temperature' => ['required'],
            'station_id' => ['required']
            
        ]);

        $releve = new Releve();

        $releve->date = $request->date;
        $releve->quantite= $request->quantite;
        $releve->region= $request->region;
        $releve->temperature= $request->temperature;
        $releve->station_id = $request->station_id;
        

        $releve->save();

        return redirect()->route('releve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Releve $releve)
    {
        return view('show', compact('releve'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $stations=Station::orderBy('nom', 'DESC')->get();
        $regions=Region::orderBy('nom', 'DESC')->get();
        $releve = Releve::where('id', $id)->first();

        return view('editReleve', [
            'releve'=> $releve,
            'stations' => $stations,
            'regions'=> $regions,
            'page' => 'editReleve'
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
        $releve = Releve::where('id', $id)->first();

        $request->validate([
            'date' => ['required'],
            'quantite' => ['required'],
            'temperature' => ['required'],
            'station_id' => ['required'],
            'region'=> ['required']
        ]);

        $releve->date = $request->date;
        $releve->quantite = $request->quantite;
        $releve->temperature = $request->temperature;
        $releve->station_id = $request->station_id;
        $releve->region = $request->region;

        $releve->save();

        Session::flash('message', 'Modification réussie');
        
        return redirect()->route('releve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $releve = Releve::where('id', $id)->first();

        $releve->delete();

        Session::flash('message', 'Suppression réussie');
        
        return redirect()->route('releve');
    }
    public function getDateAndStation(){
        $date = Releve::with('date')->get();
        $station= Releve::with('station_id');
        return view('listeMétéorologue',[
            'page'=> '',
            'dates'=> $date
        ]);
    }
}
