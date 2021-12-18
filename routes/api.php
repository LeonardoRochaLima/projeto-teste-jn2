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

Route::apiResource('cliente', 'api\ClienteController');
Route::apiResource('veiculo', 'api\VeiculoController');

Route::post('cliente/{cliente}/veiculo', 'VeiculoController@store');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
