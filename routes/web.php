<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//Conjunto de rotas criadas no padrão do laravel
Route::resource('users', UserController::class);
Route::resource('tarefas', \App\Http\Controllers\TarefaController::class);
