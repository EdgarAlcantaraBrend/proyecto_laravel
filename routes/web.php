<?php


use App\Http\Controllers\TablaCursosController;
use App\Http\Controllers\AlfabetoController;
use App\Http\Controllers\QuienesSomos;
use App\Http\Controllers\Profesores;
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
    return view('welcome');
});

Route::get('/tablaCursos', [App\Http\Controllers\TablaCursosController::class, 'tablaCursos'])->name('tablaCursos');
Route::get('/alfabeto', [App\Http\Controllers\AlfabetoController::class, 'alfabeto'])->name('alfabeto');
Route::get('/profesores', [App\Http\Controllers\Profesores::class, 'profesores'])->name('profesores');
Route::get('/quienesSomos', [App\Http\Controllers\QuienesSomos::class, 'quienesSomos'])->name('quienesSomos');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
