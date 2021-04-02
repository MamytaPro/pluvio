<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Releve;
Use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ChartJSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $record = Releve::select(DB::raw("DISTINCT SUM(quantite) as somme"), 
                        DB::raw("MONTH(date) as an"))
                    ->groupBy('an')
                    ->orderBy('an', 'ASC')
                    ->get();
                
                    $data = [];
                
                    foreach($record as $row) {
                        $data['label'][] = $row->somme;
                        $data['data'][] = (int)$row->an;
                    }
        
            $data['chart_data'] = json_encode($data);
            return view('chart-js', $data);
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