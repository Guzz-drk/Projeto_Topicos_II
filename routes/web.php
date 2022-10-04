<?php

use Illuminate\Support\Facades\Auth;
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


Route::get('maltes', [App\Http\Controllers\MaltesController::class,'index']);
Route::get('maltes/create', [App\Http\Controllers\MaltesController::class,'create']);
Route::post('maltes/store', [App\Http\Controllers\MaltesController::class,'store']);

Route::get('users', [App\Http\Controllers\UsuariosController::class,'index']);
Route::get('users/create', [App\Http\Controllers\UsuariosController::class,'create']);
Route::post('users/store', [App\Http\Controllers\UsuariosController::class,'store']);

Route::get('fermentos', [App\Http\Controllers\FermentosController::class,'index']);
Route::get('fermentos/create', [App\Http\Controllers\FermentosController::class,'create']);
Route::post('fermentos/store', [App\Http\Controllers\FermentosController::class,'store']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
