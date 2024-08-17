<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmpresasController;
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

});

require __DIR__.'/auth.php';
