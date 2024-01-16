<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AffichageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[AffichageController::class,'index'])->name('home');
Route::get('/planets/moon',[AffichageController::class,'moon'])->name('moon');
Route::get('/planets/mars',[AffichageController::class,'mars'])->name('mars');
Route::get('/planets/europa',[AffichageController::class,'europa'])->name('europa');
Route::get('/planets/titan',[AffichageController::class,'titan'])->name('titan');

Route::get('/equipages',[AffichageController::class,'equipages'])->name('equipages');
Route::get('/technologie',[AffichageController::class,'technologie'])->name('technologie');

