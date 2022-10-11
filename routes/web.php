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


Route::group(['prefix' => 'users', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'users', 'uses' => '\App\Http\Controllers\UsuariosController@index']);
    Route::get('create', ['as' => 'users.create', 'uses' => '\App\Http\Controllers\UsuariosController@create']);
    Route::get('{id}/destroy', ['as' => 'users.destroy', 'uses' => '\App\Http\Controllers\UsuariosController@destroy']);
    Route::get('{id}/edit', ['as' => 'users.edit', 'uses' => '\App\Http\Controllers\UsuariosController@edit']);
    Route::put('{id}/update', ['as' => 'users.update', 'uses' => '\App\Http\Controllers\UsuariosController@update']);
    Route::post('store', ['as' => 'users.store', 'uses' => '\App\Http\Controllers\UsuariosController@store']);
});


Route::group(['prefix' => 'maltes', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'maltes', 'uses' => '\App\Http\Controllers\MaltesController@index']);
    Route::get('create', ['as' => 'maltes.create', 'uses' => '\App\Http\Controllers\MaltesController@create']);
    Route::get('{id}/destroy', ['as' => 'maltes.destroy', 'uses' => '\App\Http\Controllers\MaltesController@destroy']);
    Route::get('{id}/edit', ['as' => 'maltes.edit', 'uses' => '\App\Http\Controllers\MaltesController@edit']);
    Route::put('{id}/update', ['as' => 'maltes.update', 'uses' => '\App\Http\Controllers\MaltesController@update']);
    Route::post('store', ['as' => 'maltes.store', 'uses' => '\App\Http\Controllers\MaltesController@store']);
});

Route::group(['prefix' => 'fermentos', 'where' => ['id' => '[0-9]+']], function () {
    Route::get('', ['as' => 'fermentos', 'uses' => '\App\Http\Controllers\FermentosController@index']);
    Route::get('create', ['as' => 'fermentos.create', 'uses' => '\App\Http\Controllers\FermentosController@create']);
    Route::get('{id}/destroy', ['as' => 'fermentos.destroy', 'uses' => '\App\Http\Controllers\FermentosController@destroy']);
    Route::get('{id}/edit', ['as' => 'fermentos.edit', 'uses' => '\App\Http\Controllers\FermentosController@edit']);
    Route::put('{id}/update', ['as' => 'fermentos.update', 'uses' => '\App\Http\Controllers\FermentosController@update']);
    Route::post('store', ['as' => 'fermentos.store', 'uses' => '\App\Http\Controllers\FermentosController@store']);
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');