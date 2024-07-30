<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\LocacaoController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\Auth\LoginController; // Import the AuthController

Route::get('/', [ClienteController::class, 'index'])->name('clientes.index');

Route::get('home', [ClienteController::class, 'index'])->name('clientes.index');
// Clientes Routes
Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
Route::get('clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::put('clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// Filmes Routes
Route::get('filmes', [FilmeController::class, 'index'])->name('filmes.index');
Route::get('filmes/create', [FilmeController::class, 'create'])->name('filmes.create');
Route::get('filmes/{id}', [FilmeController::class, 'show'])->name('filmes.show');
Route::post('filmes', [FilmeController::class, 'store'])->name('filmes.store');
Route::put('filmes/{id}', [FilmeController::class, 'update'])->name('filmes.update');
Route::delete('filmes/{id}', [FilmeController::class, 'destroy'])->name('filmes.destroy');

// Locações Routes
Route::get('locacoes', [LocacaoController::class, 'index'])->name('locacoes.index');
Route::get('locacoes/create', [LocacaoController::class, 'create'])->name('locacoes.create');
Route::get('locacoes/{id}', [LocacaoController::class, 'show'])->name('locacoes.show');
Route::post('locacoes', [LocacaoController::class, 'store'])->name('locacoes.store');
Route::put('locacoes/{id}', [LocacaoController::class, 'update'])->name('locacoes.update');
Route::delete('locacoes/{id}', [LocacaoController::class, 'destroy'])->name('locacoes.destroy');
Route::patch('locacoes/confirmar/{reservaId}/{clienteId}', [LocacaoController::class, 'confirmar'])->name('locacoes.confirmar');
Route::patch('locacoes/devolver/{id}', [LocacaoController::class, 'devolver'])->name('locacoes.devolver');

// Reservas Routes
Route::get('reservas', [ReservaController::class, 'index'])->name('reservas.index');
Route::get('reservas/create', [ReservaController::class, 'create'])->name('reservas.create');
Route::get('reservas/{id}', [ReservaController::class, 'show'])->name('reservas.show');
Route::post('reservas', [ReservaController::class, 'store'])->name('reservas.store');
Route::get('reservas/{id}/edit', [ReservaController::class, 'edit'])->name('reservas.edit');
Route::put('reservas/{id}', [ReservaController::class, 'update'])->name('reservas.update');
Route::delete('reservas/{id}', [ReservaController::class, 'destroy'])->name('reservas.destroy');
Route::get('/reservas/search-clientes', [ReservaController::class, 'searchClientes']);

// Auth Routes
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
