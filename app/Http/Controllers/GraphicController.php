<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Station;
use App\Models\releve;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class GraphicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $record = Releve::with('station')->select(DB::raw('distinct Sum(quantite) as somme, Month(date) as mois, Year(date) as an; station_id')) 
        //         ->groupBy(DB::raw("Month(date)"))->orderBy(DB::raw("Month(date)"), "ASC")->get();
        //  dd($record);

        $stations = Station::orderBy('nom', 'ASC')->get();
        
        return view('graphic', [
            'page' => 'graphic',
            'stations' => $stations,
            
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $station = Station::where('id', $id)->with('releves')->first();
        $record = Releve::select(DB::raw('distinct Sum(quantite) as qte, Month(date) as mois')) 
                ->where('station_id',$id)->groupBy(DB::raw("Month(date)"))->orderBy (DB::raw("Month(date)"), "ASC")->get();
                
                    $data = [];
                    
                        foreach ($record as $row) {
                        $data[] = $row->qte;   
                    }
                    
        
        return view('relevesStation', [
            'page' => 'graphic',
            'station' => $station,
            'record' => $record,
            'data' => json_encode($data)
        ]);
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
