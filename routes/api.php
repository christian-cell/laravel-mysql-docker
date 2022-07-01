<?php

// use App\Http\Controllers\ClientesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clientes','App\Http\Controllers\ClientesController@index');
Route::get('/clientesporid','App\Http\Controllers\ClientesController@show');
Route::post('/clientes/nuevo','App\Http\Controllers\ClientesController@store');
Route::put('/clientes/actualiza/{id}','App\Http\Controllers\ClientesController@update');
Route::delete('/clientes/elimina/{id}','App\Http\Controllers\ClientesController@destroy');
