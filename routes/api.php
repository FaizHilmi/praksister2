<?php

use App\Http\Controllers\DataMotorController;
use App\Http\Controllers\GetIdController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('motor',[DataMotorController::class,'index']);
Route::get('Idmotor',[GetIdController::class,'showbyId']);
Route::post('motor',[DataMotorController::class,'create']);
Route::put('motor',[DataMotorController::class,'update']);
Route::delete('motor',[DataMotorController::class,'delete']);
