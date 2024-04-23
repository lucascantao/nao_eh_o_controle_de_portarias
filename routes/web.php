<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\PortariaController;
use App\Http\Controllers\UserController;

Route::middleware(['auth', 'registered'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [PortariaController::class, 'search'])->middleware(['auth', 'registered'])->name('portaria.search');

Route::get('/status', function() {
    return view('status.status');
})->middleware(['auth',])->name('status');

// Setores
Route::prefix('setor')->middleware(['auth', 'registered', 'master'])->group(function () {
    Route::get('/', [SetorController::class, 'index'])->name('setor.index');
    Route::get('/create', [SetorController::class, 'create'])->name('setor.create');
    Route::post('/', [SetorController::class, 'store'])->name('setor.store');
    Route::get('/{setor}/edit', [SetorController::class, 'edit'])->name('setor.edit');
    Route::put('/{setor}/update', [SetorController::class, 'update'])->name('setor.update');
    Route::delete('/{setor}/destroy', [SetorController::class, 'destroy'])->name('setor.destroy');
});

//Assuntos
Route::prefix('assunto')->middleware(['auth', 'registered', 'master'])->group(function () {
    Route::get('/', [AssuntoController::class, 'index'])->name('assunto.index');
    Route::get('/create', [AssuntoController::class, 'create'])->name('assunto.create');
    Route::post('/', [AssuntoController::class, 'store'])->name('assunto.store');
    Route::get('/{assunto}/edit', [AssuntoController::class, 'edit'])->name('assunto.edit');
    Route::put('/{assunto}/update', [AssuntoController::class, 'update'])->name('assunto.update');
    Route::get('/{assunto}/destroy', [AssuntoController::class, 'destroy'])->name('assunto.destroy');
});

Route::prefix('gerenciar-perfis')->middleware(['auth', 'registered', 'admin'])->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('user.index');
    Route::get('/{user}/enable', [UserController::class, 'enable'])->name('user.enable');
    Route::get('/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/{user}/update', [UserController::class, 'update'])->name('user.update');
});

require __DIR__.'/auth.php';