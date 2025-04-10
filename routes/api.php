<?php

use App\Http\Controllers\kategoriaController;
use App\Http\Controllers\tesztController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();

    
})->middleware('auth:sanctum');

Route::get('/tesztek', [tesztController::class, 'tesztek']);
Route::get('/tesztek/kategoria/{id}', [tesztController::class, 'show']);
Route::get('/kategoria', [kategoriaController::class, 'index']);
