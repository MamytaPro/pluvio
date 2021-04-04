<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'tel' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'role' => ['required', 'string'],
            'meteo_id' => ['nullable'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user = new User();

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->tel = $request->tel;
        $user->adresse = $request->adresse;
        $user->role = $request->role;
        $user->meteo_id = isset($request->meteo_id) ? $request->meteo_id : null;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        // User::create([
        //     'nom' => $request['nom'],
        //     'prenom' => $request['prenom'],
        //     'tel' => $request['tel'],
        //     'adresse' => $request['adresse'],
        //     'role' => $request['role'],
        //     'email' => $request['email'],
        //     'password' => Hash::make($request['password']),
        // ]);

        if (Auth::user()->role === 'Admin') {
            Session::flash('message', 'Ajout réussi');
        } else {
            Session::flash('message', 'Technicien ajouté avec succès');
        }

        if ($user->role === 'Technicien') {
            return redirect()->route('meteo');
        }else{
            return redirect()->route('getmeteo');
        }
        
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
        $users = User::where('role','Météorologue')->get();
        $user = User::where('id', $id)->first();


        if ($user->role === 'Météorologue') {
            $type = 'meteo';
        } 
        else {
            $type = 'tech';
        }
        return view('editUser', [
            'user' => $user,
            'page' => 'modifierUser',
            'type' => $type,
            'users'=> $users
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
        $user = User::where('id', $id)->first();

        $request->validate([
            'nom' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'tel' => ['required', 'string'],
            'adresse' => ['required', 'string'],
            'prenom' => ['required', 'string'],
            'role' => ['required', 'string'],
            'meteo_id' => ['nullable'],
        ]);

        $user->nom = $request->nom;
        $user->prenom = $request->prenom;
        $user->tel = $request->tel;
        $user->adresse = $request->adresse;
        $user->role = $request->role;
        $user->meteo_id = isset($request->meteo_id) ? $request->meteo_id : null;
        $user->email = $request->email;

        $user->save();

        Session::flash('message', 'Modification réussie');
        
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::where('id', $id)->first();

        $user->delete();

        Session::flash('message', 'Suppression réussie');
        
        return back();
    }
}
