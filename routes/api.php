<?php

use Illuminate\Http\Request;
use App\postes;
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
//Route::apiResource('/postes','gestionController@index');
Route::apiResource('/postes','GestionController');
Route::apiResource('/clients','ClientsController');
Route::apiResource('/attributions','AttributionsController');