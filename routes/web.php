<?php


use App\Http\Controllers\CaricaturaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonajeController;
use Illuminate\Support\Facades\Route;

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


//composer require laravel/ui
//php artisan ui bootstrap
//php artisan ui bootstrap --auth

Auth::routes();
Route::get('/personajes', [PersonajeController::class, 'personajes'])->name('personaje.index');
Route::get('/personaje/{id}', [PersonajeController::class, 'detalle'])->name('personaje.show');
Route::get('/cargar-api/{pagina}', [CaricaturaController::class, 'registrar'])->name('registrar');
