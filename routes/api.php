<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('calculadora', 'App\Http\Controllers\CalculadoraController');

///api/sum?value1=10.5&value2=0.7
Route::get('/sum', 'App\Http\Controllers\CalculadoraController@sum');

///api/sub?value1=10.5&value2=0.7
Route::get('/sub', 'App\Http\Controllers\CalculadoraController@sub');

///api/div?value1=10.5&value2=0.7
Route::get('/div', 'App\Http\Controllers\CalculadoraController@div');

///mult/sub?value1=10.5&value2=0.7
Route::get('/mult', 'App\Http\Controllers\CalculadoraController@mult');