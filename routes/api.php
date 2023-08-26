<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\KoreografController;
use App\Http\Controllers\VrstaPlesaKoreografController;
use App\Http\Controllers\PlesnaSkolaController;
use App\Http\Controllers\PlesacController;

Route::get('/plesneskole', [PlesnaSkolaController::class, 'index']);
Route::get('/plesnaskola/{id}', [PlesnaSkolaController::class, 'show']);
Route::get('/koreografi', [KoreografController::class, 'index']);
Route::get('/koreograf/{id}', [KoreografController::class, 'show']);
Route::get('/koreografOdredjeneVrstePlesa/{id}', [VrstaPlesaKoreografController::class, 'index']);
Route::get('/plesaci', [PlesacController::class, 'index']);
Route::get('/plesac/{id}', [PlesacController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:sanctum']], function() {

    Route::resource('/plesnaskola', PlesnaSkolaController::class)->only(['store','update','destroy']);
    Route::resource('/koreograf', KoreografController::class)->only(['update', 'destroy']);
    Route::resource('/plesac', PlesacController::class)->only(['store','update','destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});