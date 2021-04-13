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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('calculate-api', 'ApiCalculationsController@apiCalculations');
Route::get('get-calculation-types', 'ApiCalculationsController@getTypes');

Route::get('get-person-list', 'PersonController@index');
Route::post('create-person', 'PersonController@store');
Route::post('update-person/{person}', 'PersonController@update');
Route::delete('delete-person/{person}', 'PersonController@destroy');

Route::post('wargaming/get-user', 'WargamingApiController@getUser');
