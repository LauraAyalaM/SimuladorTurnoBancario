<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurnoController;

Route::get('/', [TurnoController::class, 'index'])->name('turno.index');
Route::post('/generar', [TurnoController::class, 'generar'])->name('turno.generar');
Route::post('/atender/{tipo}', [TurnoController::class, 'atender'])->name('turno.atender');
Route::post('/reset', [TurnoController::class, 'reset'])->name('turno.reset');