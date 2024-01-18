<?php

use App\Http\Controllers\ApiController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::controller(ApiController::class)->group(function (){
    Route::get('/notas',  'index');
    Route::get('/notas/{id}',  'show');
    Route::post('/notas',  'store');
    Route::put('/notas/{id}',  'update');
    Route::delete('/notas/{id}',  'destroy');
});
