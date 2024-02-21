<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PlanetAPIController;
use App\Http\Controllers\API\CrewAPIController;
use App\Http\Controllers\API\TechnologieAPIController;
use App\Http\Controllers\API\UserAuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


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
    Route::get('/users', [UserAuthController::class, 'index'])->name('index');
    Route::post('/', [UserAuthController::class, 'store']);
    Route::put('/{id}', [UserAuthController::class, 'update']);
    Route::delete('/{id}', [UserAuthController::class, 'destroy']);

    Route::get('/key', [UserAuthController::class, 'sendKeyToClient']);

// Public accessible API
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Authenticated only API
// We use auth api here as a middleware so only authenticated user who can access the endpoint
// We use group so we can apply middleware auth api to all the routes within the group
Route::middleware('auth:api')->group(function() {
    Route::get('/me', [UserController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);
});


Route::post('register',[UserAuthController::class,'register']);
Route::post('login',[UserAuthController::class,'login']);
Route::post('logout',[UserAuthController::class,'logout'])
  ->middleware('auth:sanctum');


