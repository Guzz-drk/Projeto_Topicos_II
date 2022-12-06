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

Route::group(['middleware' => 'auth'], function(){
    Route::group(['prefix' => 'users', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'users', 'uses' => '\App\Http\Controllers\UsuariosController@index']);
        Route::get('create', ['as' => 'users.create', 'uses' => '\App\Http\Controllers\UsuariosController@create']);
        Route::get('{id}/destroy', ['as' => 'users.destroy', 'uses' => '\App\Http\Controllers\UsuariosController@destroy']);
        Route::get('{id}/edit', ['as' => 'users.edit', 'uses' => '\App\Http\Controllers\UsuariosController@edit']);
        Route::put('{id}/update', ['as' => 'users.update', 'uses' => '\App\Http\Controllers\UsuariosController@update']);
        Route::post('store', ['as' => 'users.store', 'uses' => '\App\Http\Controllers\UsuariosController@store']);
    });

    Route::group(['prefix' => 'receitas', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'receitas', 'uses' => '\App\Http\Controllers\ReceitasController@index']);
        Route::get('create', ['as' => 'receitas.create', 'uses' => '\App\Http\Controllers\ReceitasController@create']);
        Route::get('{id}/destroy', ['as' => 'receitas.destroy', 'uses' => '\App\Http\Controllers\ReceitasController@destroy']);
        Route::get('{id}/edit', ['as' => 'receitas.edit', 'uses' => '\App\Http\Controllers\ReceitasController@edit']);
        Route::put('{id}/update', ['as' => 'receitas.update', 'uses' => '\App\Http\Controllers\ReceitasController@update']);
        Route::post('store', ['as' => 'receitas.store', 'uses' => '\App\Http\Controllers\ReceitasController@store']);
    });

    Route::group(['prefix' => 'malteLevas', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'malteLevas', 'uses' => '\App\Http\Controllers\MalteLevasController@index']);
        Route::get('create', ['as' => 'malteLevas.create', 'uses' => '\App\Http\Controllers\MalteLevasController@create']);
        Route::get('{id}/destroy', ['as' => 'malteLevas.destroy', 'uses' => '\App\Http\Controllers\MalteLevasController@destroy']);
        Route::get('{id}/edit', ['as' => 'malteLevas.edit', 'uses' => '\App\Http\Controllers\MalteLevasController@edit']);
        Route::put('{id}/update', ['as' => 'malteLevas.update', 'uses' => '\App\Http\Controllers\MalteLevasController@update']);
        Route::post('store', ['as' => 'malteLevas.store', 'uses' => '\App\Http\Controllers\MalteLevasController@store']);
    });

    Route::group(['prefix' => 'estiloLevas', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'estiloLevas', 'uses' => '\App\Http\Controllers\EstiloLevasController@index']);
        Route::get('create', ['as' => 'estiloLevas.create', 'uses' => '\App\Http\Controllers\EstiloLevasController@create']);
        Route::get('{id}/destroy', ['as' => 'estiloLevas.destroy', 'uses' => '\App\Http\Controllers\EstiloLevasController@destroy']);
        Route::get('{id}/edit', ['as' => 'estiloLevas.edit', 'uses' => '\App\Http\Controllers\EstiloLevasController@edit']);
        Route::put('{id}/update', ['as' => 'estiloLevas.update', 'uses' => '\App\Http\Controllers\EstiloLevasController@update']);
        Route::post('store', ['as' => 'estiloLevas.store', 'uses' => '\App\Http\Controllers\EstiloLevasController@store']);
    });

    Route::group(['prefix' => 'maltes', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'maltes', 'uses' => '\App\Http\Controllers\MaltesController@index']);
        Route::get('create', ['as' => 'maltes.create', 'uses' => '\App\Http\Controllers\MaltesController@create']);
        Route::get('{id}/destroy', ['as' => 'maltes.destroy', 'uses' => '\App\Http\Controllers\MaltesController@destroy']);
        Route::get('{id}/edit', ['as' => 'maltes.edit', 'uses' => '\App\Http\Controllers\MaltesController@edit']);
        Route::put('{id}/update', ['as' => 'maltes.update', 'uses' => '\App\Http\Controllers\MaltesController@update']);
        Route::post('store', ['as' => 'maltes.store', 'uses' => '\App\Http\Controllers\MaltesController@store']);
    });

    Route::group(['prefix' => 'fermentos', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'fermentos', 'uses' => '\App\Http\Controllers\FermentosController@index']);
        Route::get('create', ['as' => 'fermentos.create', 'uses' => '\App\Http\Controllers\FermentosController@create']);
        Route::get('{id}/destroy', ['as' => 'fermentos.destroy', 'uses' => '\App\Http\Controllers\FermentosController@destroy']);
        Route::get('{id}/edit', ['as' => 'fermentos.edit', 'uses' => '\App\Http\Controllers\FermentosController@edit']);
        Route::put('{id}/update', ['as' => 'fermentos.update', 'uses' => '\App\Http\Controllers\FermentosController@update']);
        Route::post('store', ['as' => 'fermentos.store', 'uses' => '\App\Http\Controllers\FermentosController@store']);
    });

    Route::group(['prefix' => 'levas', 'where' => ['id' => '[0-9]+']], function () {
        Route::get('', ['as' => 'levas', 'uses' => '\App\Http\Controllers\LevasController@index']);
        Route::get('create', ['as' => 'levas.create', 'uses' => '\App\Http\Controllers\LevasController@create']);
        Route::get('{id}/destroy', ['as' => 'levas.destroy', 'uses' => '\App\Http\Controllers\LevasController@destroy']);
        Route::get('{id}/edit', ['as' => 'levas.edit', 'uses' => '\App\Http\Controllers\LevasController@edit']);
        Route::put('{id}/update', ['as' => 'levas.update', 'uses' => '\App\Http\Controllers\LevasController@update']);
        Route::post('store', ['as' => 'levas.store', 'uses' => '\App\Http\Controllers\LevasController@store']);
    });

    Route::group(['prefix' => 'lupulos', 'where' => ['id' => '[0-9]+']], function () {
        Route::any('', ['as' => 'lupulos', 'uses' => '\App\Http\Controllers\LupulosController@index']);
        Route::get('create', ['as' => 'lupulos.create', 'uses' => '\App\Http\Controllers\LupulosController@create']);
        Route::get('{id}/destroy', ['as' => 'lupulos.destroy', 'uses' => '\App\Http\Controllers\LupulosController@destroy']);
        Route::get('{id}/edit', ['as' => 'lupulos.edit', 'uses' => '\App\Http\Controllers\LupulosController@edit']);
        Route::put('{id}/update', ['as' => 'lupulos.update', 'uses' => '\App\Http\Controllers\LupulosController@update']);
        Route::post('store', ['as' => 'lupulos.store', 'uses' => '\App\Http\Controllers\LupulosController@store']);
    });
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
