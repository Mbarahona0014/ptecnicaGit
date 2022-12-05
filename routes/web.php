<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatMateriumController;
use App\Http\Controllers\GrdGradoController;
use App\Http\Controllers\MxgMateriasxgradoController;
use App\Http\Controllers\AlmAlumnoController;
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
Route::resource('mat-materia', MatMateriumController::class);
Route::resource('grd-grados', GrdGradoController::class);
Route::resource('mxg-materiasxgrados', MxgMateriasxgradoController::class);
Route::resource('alm-alumnos', AlmAlumnoController::class);
Route::resource('home', AlmAlumnoController::class);

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
