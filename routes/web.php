<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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


// création des routes pour acceder aux views index, login et signup
Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('/Login/login');
});

Route::get('/signup', function () {
    return view('/Login/signup');
});


 Route::post('/signup', function () {
     return 'Votre mail recu est' .request('email');
 });


Route::get('/client',[ClientController::class,'list']);

?>
