<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SetorController;
use App\Http\Controllers\AssuntoController;
use App\Http\Controllers\PortariaController;

Route::get('/', [PortariaController::class, 'search'])->name('portaria.search');

// Setores
Route::get('/setor', [SetorController::class, 'index'])->name('setor.index');
Route::get('/setor/create', [SetorController::class, 'create'])->name('setor.create');
Route::post('/setor', [SetorController::class, 'store'])->name('setor.store');
Route::get('/setor/{setor}/edit', [SetorController::class, 'edit'])->name('setor.edit');
Route::put('/setor/{setor}/update', [SetorController::class, 'update'])->name('setor.update');
Route::delete('/setor/{setor}/destroy', [SetorController::class, 'destroy'])->name('setor.destroy');

//Assuntos
Route::get('/assunto', [AssuntoController::class, 'index'])->name('assunto.index');
Route::get('/assunto/create', [AssuntoController::class, 'create'])->name('assunto.create');
Route::post('/assunto', [AssuntoController::class, 'store'])->name('assunto.store');
Route::get('/assunto/{assunto}/edit', [AssuntoController::class, 'edit'])->name('assunto.edit');
Route::put('/assunto/{assunto}/update', [AssuntoController::class, 'update'])->name('assunto.update');
Route::get('/assunto/{assunto}/destroy', [AssuntoController::class, 'destroy'])->name('assunto.destroy');

