<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\SoireeController;
use App\Http\Controllers\GoodieController;
use App\Http\Controllers\ReservationController;

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
//Routes autour des soirées
Route::get('/soirees', [SoireeController::class, 'index']);
Route::post('/soirees', [SoireeController::class, 'store']);
Route::put('/soirees/{id}', [SoireeController::class, 'update']);
Route::delete('/soirees/{id}', [SoireeController::class, 'destroy']);

//Routes autour des goodies
Route::get('/goodies', [GoodieController::class, 'index']);
Route::post('/goodies', [GoodieController::class, 'store']);
Route::put('/goodies/{id}', [GoodieController::class, 'update']);
Route::delete('/goodies/{id}', [GoodieController::class, 'destroy']);

//Routes autour des réservations
Route::get('/reservations', [ReservationController::class, 'index']);
Route::post('/reservations', [ReservationController::class, 'store']);
Route::put('/reservations/{id}', [ReservationController::class, 'update']);
Route::delete('/reservations/{id}', [ReservationController::class, 'destroy']);