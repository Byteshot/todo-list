<?php

use App\Http\Controllers\PersonajeController;
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
//Route::get('/personaje', [PersonajeController::class, 'test'])->name('api.personaje');
Route::post('/personaje', [PersonajeController::class, 'store'])->name('api.agregar.personaje');
