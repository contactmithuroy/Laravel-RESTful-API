<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SubjectController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("data",[ApiController::class,'getApi']);
// ................................................................................

Route::group(['middleware' => 'auth:sanctum'], function(){
    //All secure URL's

    Route::get("list",[DeviceController::class,'list']);

    Route::post("add",[DeviceController::class,'addData']);

    Route::put("update",[DeviceController::class,'update']);

    Route::delete("delete/{id}",[DeviceController::class,'delete']);

    Route::get("search/{name}",[DeviceController::class,'search']);

    Route::get("getData",[DeviceController::class,'getData']);

    // api resource
    Route::apiResource('subject',SubjectController::class);

    });


// ---------------subject Api----------------------------------------------------------

//login route always stay outside
Route::post("login",[UserController::class,'index']);

// Roules
go Hedder in postman set
Authorization and toker Beerer 
[{"key":"Authorization","value":"Bearer 8|8L8XdIE599i3XATYzXTwESON6tLDEeQoXSMKnnFF","description":""}]