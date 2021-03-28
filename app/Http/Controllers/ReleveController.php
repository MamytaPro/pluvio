<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Releve;


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
            'date' => ['required', 'unique:releves'],
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
