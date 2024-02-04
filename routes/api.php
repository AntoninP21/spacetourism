<?php

use App\Http\Controllers\API\PlanetAPIController;
use App\Http\Controllers\API\CrewAPIController;
use App\Http\Controllers\API\TechnologieAPIController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::group(['prefix' => '/planet'],function () {
    Route::get('/', [PlanetAPIController::class, 'index'])->name('index');
    Route::get('/{id}', [PlanetAPIController::class, 'show']);
    Route::post('/', [PlanetAPIController::class, 'store']);
    Route::put('/{id}', [PlanetAPIController::class, 'update']);
    Route::delete('/{id}', [PlanetAPIController::class, 'destroy']);
});

Route::group(['prefix' => '/crew'],function () {
    Route::get('/', [CrewAPIController::class, 'index'])->name('index');
    Route::get('/{id}', [CrewAPIController::class, 'show']);
    Route::post('/', [CrewAPIController::class, 'store']);
    Route::put('/{id}', [CrewAPIController::class, 'update']);
    Route::delete('/{id}', [CrewAPIController::class, 'destroy']);
});
Route::group(['prefix' => '/technologie'],function () {
    Route::get('/', [TechnologieAPIController::class, 'index'])->name('index');
    Route::get('/{id}', [TechnologieAPIController::class, 'show']);
    Route::post('/', [TechnologieAPIController::class, 'store']);
    Route::put('/{id}', [TechnologieAPIController::class, 'update']);
    Route::delete('/{id}', [TechnologieAPIController::class, 'destroy']);
});

Route::group(['prefix' => '/crew'],function () {
    Route::get('/index', [PlanetAPIController::class, 'index']);
});   
Route::group(['prefix' => '/technologie'],function () {
    Route::get('/index', [PlanetAPIController::class, 'index']);
}); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
