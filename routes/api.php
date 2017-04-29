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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/user/lembur','API\LemburController@userLembur'); // njupuk lembur yg dilakukan si user

Route::post('/register','API\RegisterController@store');


Route::post('/lembur','API\LemburController@store');

Route::get('/lembur','API\LemburController@index'); //iki admin ambil yg status masih 0
Route::get('/lembur/all','API\LemburController@all'); // iki admin njupuk kabeh
Route::get('/lembur/{id}/accept','API\LemburController@accept');
Route::get('/lembur/{id}/reject','API\LemburController@reject');
