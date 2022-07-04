<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::middleware('auth')->group(function(){
    Route::get('/', function () {return view('home');});
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::prefix('Actividad')->group(function () {
        Route::get('/', [ActividadController::class, 'index'])->name('actividad.index');
        Route::get('/create', [ActividadController::class, 'create'])->name('actividad.create');
        Route::post('/store', [ActividadController::class, 'store'])->name('actividad.store');
        Route::get('/{actividad}/edit', [ActividadController::class, 'edit'])->name('actividad.edit');
        Route::put('/{actividad}/update', [ActividadController::class, 'update'])->name('actividad.update');

        
    });
});
