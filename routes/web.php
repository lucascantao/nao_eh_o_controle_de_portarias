<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\PortariaController;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PortariaController::class, 'search'])->middleware(['auth', 'verified'])->name('portaria.search');

// Setores
Route::prefix('setor')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', [SetorController::class, 'index'])->name('setor.index');
    Route::get('/create', [SetorController::class, 'create'])->name('setor.create');
    Route::post('/', [SetorController::class, 'store'])->name('setor.store');
    Route::get('/{setor}/edit', [SetorController::class, 'edit'])->name('setor.edit');
    Route::put('/{setor}/update', [SetorController::class, 'update'])->name('setor.update');
    Route::delete('/{setor}/destroy', [SetorController::class, 'destroy'])->name('setor.destroy');
});

//Assuntos
Route::get('/assunto', [AssuntoController::class, 'index'])->name('assunto.index');
Route::get('/assunto/create', [AssuntoController::class, 'create'])->name('assunto.create');
Route::post('/assunto', [AssuntoController::class, 'store'])->name('assunto.store');
Route::get('/assunto/{assunto}/edit', [AssuntoController::class, 'edit'])->name('assunto.edit');
Route::put('/assunto/{assunto}/update', [AssuntoController::class, 'update'])->name('assunto.update');
Route::get('/assunto/{assunto}/destroy', [AssuntoController::class, 'destroy'])->name('assunto.destroy');

require __DIR__.'/auth.php';