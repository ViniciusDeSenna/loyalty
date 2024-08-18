<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpresasController;
use App\Http\Controllers\EmpresasConfigController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    /* Rotas Minha Empresa */
    Route::get('/minha-empresa', [EmpresasController::class, 'index'])->name('minha-empresa.index');
    Route::get('/minha-empresa/config', [EmpresasConfigController::class, 'index'])->name('minha-empresa-config.index');
    Route::post('/minha-empresa/config/store', [EmpresasConfigController::class, 'store'])->name('minha-empresa-config.store');
});

require __DIR__.'/auth.php';
