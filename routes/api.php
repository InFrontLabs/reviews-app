<?php

use Illuminate\Http\Request;

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
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Content-Type');
header('Access-Control-Allow-Methods: POST, PUT, PATCH, DELETE, GET, OPTIONS');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/reviews', function (Request $request) {
   return \App\Review::limit(20)->get();
});
