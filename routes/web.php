<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {

    return view('welcome');
});
*/
Route::get('/contacto', function () {

    return "Contactame";
})->name('contacto');

Route::get('custom', function () {
    $mensj = "Mensaje desde el servidor *-*";


    $data = ['mensaje' => $mensj,"edad" => 15];

    return view('custom',$data);
});

Route::get('/', [TestController::class,'test']);

