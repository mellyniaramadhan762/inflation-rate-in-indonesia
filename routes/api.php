<?php

use App\Http\Resources\InflationRatesResource;
use App\Models\InflationRates;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InflationRatesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/InflationRates', [InflationRatesController::class, 'index']);
Route::get('/InflationRates/{id}', [InflationRatesController::class, 'show']);
Route::post('/InflationRates', [InflationRatesController::class, 'store']);
Route::put('/InflationRates/{id}', [InflationRatesController::class, 'update']);
Route::delete('/InflationRates/{id}', [InflationRatesController::class, 'destroy']);

