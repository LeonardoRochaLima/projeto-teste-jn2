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

//Rotas para todos os métodos dentro dos controller
Route::apiResource('cliente', 'api\ClienteController');
Route::apiResource('veiculo', 'api\VeiculoController');

//Rota para verificação de veículos do cliente
Route::get('cliente/{cliente}/veiculos', 'api\VeiculoController@veiculos');

//Rota para cadastro de veículos do cliente
Route::post('cliente/{cliente}/veiculo', 'api\VeiculoController@store');

//Rota para consulta de placa
Route::get('consulta/final-placa/{numero}', 'api\VeiculoController@consultaPlaca');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
 */
