<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class,'index']);

    Route::get('/customers', [\App\Http\Controllers\CustomerController::class,'index']);
    Route::post('/customers', [\App\Http\Controllers\CustomerController::class,'store']);
    Route::get('/customers/create', [\App\Http\Controllers\CustomerController::class,'create']);
    Route::get('/customers/{id}/edit', [\App\Http\Controllers\CustomerController::class,'edit']);
    Route::put('/customers/{id}', [\App\Http\Controllers\CustomerController::class,'update']);
    Route::delete('/customers/{id}', [\App\Http\Controllers\CustomerController::class,'destroy']);

    Route::get('/armadas', [\App\Http\Controllers\ArmadaController::class,'index']);
    Route::post('/armadas', [\App\Http\Controllers\ArmadaController::class,'store']);
    Route::get('/armadas/create', [\App\Http\Controllers\ArmadaController::class,'create']);
    Route::get('/armadas/{id}/edit', [\App\Http\Controllers\ArmadaController::class,'edit']);
    Route::put('/armadas/{id}', [\App\Http\Controllers\ArmadaController::class,'update']);
    Route::delete('/armadas/{id}', [\App\Http\Controllers\ArmadaController::class,'destroy']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
