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
        $record = Releve::select(DB::raw('distinct Sum(quantite) as somme, Month(date) as mois')) 
                ->groupBy(DB::raw("Month(date)"))->orderBy (DB::raw("Month(date)"), "ASC")->get();
                
                    $data = [];
                    $moisActuel = intval(date('m'));

                    for ($i=1; $i<=$moisActuel; $i++) {
                        $som=0;
                        foreach ($record as $row) {
                            if($i===$row->mois){
                                $som=$row->quantite;
                                break;
                            }
                        }
                        $data[] = $som;   
                    }
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
