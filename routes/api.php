<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('get_users',[UserController::class,'get_users']);
Route::post('store',[UserController::class,'store']);
Route::post('delete/{id}',[UserController::class,'delete']);


//crud
Route::post('store_form_data',[UserController::class,'store_form_data']);
Route::get('get_form_data',[UserController::class,'get_form_data']);
Route::post('store_form',function(){
    return 11;
});



