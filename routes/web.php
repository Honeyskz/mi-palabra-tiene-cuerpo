<?php

use App\Http\Controllers\FotoController;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\RespuestaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PaginaController::class, 'index'])->name('inicio');
Route::post('/fotos', [FotoController::class, 'store'])->name('fotos.store');
Route::post('/respuestas', [RespuestaController::class, 'store'])->name('respuestas.store');