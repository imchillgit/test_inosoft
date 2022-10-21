<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\TransactionController;

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

Route::get('/kendaraan', [KendaraanController::class, 'index']);
Route::post('/kendaraan', [KendaraanController::class, 'store']);
Route::put('/kendaraan/{_id}', [KendaraanController::class, 'update']);
Route::delete('/kendaraan/{_id}', [KendaraanController::class, 'destroy']);

Route::get('/transaction', [TransactionController::class, 'index']);
Route::get('/transaction/{idkendaraan}', [TransactionController::class, 'show']);
Route::post('/transaction', [TransactionController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
