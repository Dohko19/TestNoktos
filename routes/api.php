<?php

use App\Http\Controllers\API\BedroomController;
use App\Http\Controllers\API\HostController;
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

Route::get('/host/index', [HostController::class, 'index']);
Route::post('/host/store', [HostController::class, 'store']);
Route::post('/bedroom/store', [BedroomController::class, 'store']);
