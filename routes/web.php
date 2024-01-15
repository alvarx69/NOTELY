<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotasController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    if(!Auth::check()){
        return view('welcome');
    }else{
        return redirect()->route('notas.index');
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::controller(NotasController::class)->group( function () {
        Route::get('/notas', 'index')->name('notas.index');
        Route::get('/notas/create', 'create')->name('notas.create');
        Route::post('/notas/store', 'store')->name('notas.store');
        Route::get('/notas/show', 'showPag')->name('notas.showPag');
        Route::get('/notas/{nota}', 'show')->name('notas.show');
        Route::get('/notas/edit/{nota}', 'edit')->name('notas.edit');
        Route::post('/notas/edit/{nota}', 'editChange')->name('notas.editChange');
        Route::get('/notas/delete/{nota}', 'delete')->name('notas.delete');
    });
});



require __DIR__.'/auth.php';
