<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

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

Route::get('/', function () {
    return view('welcome');
});


// /empleados - lo que se escribe en el navegador
// empleados.index - lo que se va a mostrar la carpeta en empleados y vista index
Route::get('/empleados', function () {
    return view('empleados.index');
});

//Route::get('/empleados/create', [EmpleadoController::class,'create']); //acceder a una sola vista

Route::resource('empleados', EmpleadoController::class); //acceder a todas las vistas