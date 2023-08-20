<?php

use App\Http\Controllers\ClienteViewController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClienteViewController::class, 'index']);
Route::get('/clientes/create', [ClienteViewController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteViewController::class, 'store'])->name('clientes.store');
Route::post('/clientes/{cliente}', [ClienteViewController::class, 'show'])->name('clientes.show');
Route::get('/clientes/{cliente}/edit', [ClienteViewController::class, 'edit'])->name('clientes.edit');
Route::put('/clientes/{cliente}', [ClienteViewController::class, 'update'])->name('clientes.update');
Route::delete('/clientes/{cliente', [ClienteViewController::class, 'update'])->name('clientes.update');
