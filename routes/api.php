<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::post('/student','App\Http\Controllers\ApiController@create');
Route::get('/students','App\Http\Controllers\ApiController@show');
Route::get('/student/{id}','App\Http\Controllers\ApiController@showbyid');
Route::get('/studentupdate/{id}','App\Http\Controllers\ApiController@updatebyid');
Route::delete('/studentdelete/{id}','App\Http\Controllers\ApiController@deletebyid');