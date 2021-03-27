<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MeteorologueController;
use App\Http\Controllers\TechnicienController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReleveController;
use App\Http\Controllers\StationController;

use App\Models\User;
use App\Models\Region;
use App\Models\Departement;



Route::get('/', function () {
    return view('login');
});
Route::get('/administrateur', [AdminController::class, 'index'])->name('admin');

Route::get('/meteorologue', [MeteorologueController::class, 'index'])->name('meteo');

Route::get('/technicien', [TechnicienController::class, 'index'])->name('technicien');

Route::get('/releve', [ReleveController::class, 'index'])->name('releve');

Route::get('/station', [StationController::class, 'index'])->name('station');



Route::get('/add-user', function(){
    return view('register', ['page' => 'adduser']);
})->name('add-user');


Route::get('/add-station', function(){
    $user = User::where('role', 'Technicien')->get();
    $regions = Region::orderBy('nom', 'ASC')->get();
    $departements= Departement::orderBy('nom','ASC')->get();

    return view('registerStation', [
        'page' => 'addstation',
        'users' => $user,
        'regions' => $regions,
        'departements'=> $departements
        ]);
})->name('add-station');




Route::post('/add-user', [UserController::class, 'store'])->name('adduser');
Route::post('/add-station', [StationController::class, 'store'])->name('addstation');
Route::get('/edit-user/{id}', [UserController::class, 'edit'])->name('edituser');
Route::post('/edit-user/{id}', [UserController::class, 'update'])->name('update');
Route::get('/edit-station/{id}', [StationController::class, 'edit'])->name('editstation');
Route::post('/edit-station/{id}', [StationController::class, 'update'])->name('update');

Route::get('/delete-user/{id}', [UserController::class, 'destroy'])->name('deleteuser');

//Route::get('/', [controlleur::class,'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', function (){
    return view('login');
})->name('login');

Route::get('/getmeteo', [AdminController::class, 'getMeteo'])->name('getmeteo');
