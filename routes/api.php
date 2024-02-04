<?php

use App\Http\Controllers\API\PlanetAPIController;
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
    Route::get('/index', [PlanetAPIController::class, 'index']);
});   
Route::group(['prefix' => '/technologie'],function () {
    Route::get('/index', [PlanetAPIController::class, 'index']);
}); 

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
