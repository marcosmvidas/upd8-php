<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

Route::get('/clientes/create', [ClienteController::class, 'createView'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'storeView'])->name('clientes.store');
Route::get('/clientes', [ClienteController::class, 'indexView'])->name('clientes.index');
Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'editView'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteController::class, 'updateView'])->name('clientes.update');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroyView'])->name('clientes.destroy');
