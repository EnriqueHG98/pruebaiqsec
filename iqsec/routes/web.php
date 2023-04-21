<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return view('index');
});

Route::view('/inicio', "index")->name('inicio');
Route::view('/login', "login")->name('login');
Route::view('/privada', "secret")->middleware('auth')->name('privada');

Route::get('/private', [LoginController::class, 'listarBenef'])->name('private');
Route::get('/mis-beneficios', [Controller::class, 'misBeneficios'])->name('mis-beneficios');
Route::get('/pdf', [Controller::class, 'generaPdf'])->name('pdf');


Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');
Route::post('/inicia-sesion', [LoginController::class, 'loginUser'])->name('inicia-sesion');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/guardarUsuario', [Controller::class, "registraUser"])->name("resgitraUser");

Route::post('/{id}/contratar', [Controller::class, 'ActivarBeneficios'])->name('ActivarBeneficios');
Route::delete('/{id}/eliminar', [Controller::class, 'desactivarBeneficios'])->name('desactivarBeneficios');
