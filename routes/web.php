<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;

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

Route::get('/', HomeController::class)->name('home');

Route::controller(NotasController::class)->group( function () {
    Route::get('/notas', 'index')->name('notas.index');
    Route::get('/notas/create', 'create')->name('notas.create');
    Route::get('/notas/{nota}', 'show')->name('notas.show');
    Route::get('/notas/edit/{nota}', 'edit')->name('notas.edit');
});

