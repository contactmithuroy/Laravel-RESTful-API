<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SubjectController;


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

Route::get("list",[DeviceController::class,'list']);

Route::post("add",[DeviceController::class,'addData']);


Route::put("update",[DeviceController::class,'update']);

Route::delete("delete/{id}",[DeviceController::class,'delete']);

Route::get("search/{name}",[DeviceController::class,'search']);

Route::get("getData",[DeviceController::class,'getData']);

// ---------------subject Api----------------------------------------------------------

Route::apiResource('subject',SubjectController::class);

