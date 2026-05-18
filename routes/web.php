<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('boasvindas');
});

Route::middleware('guest')->group(function () {
    Route::get('/cadastro', [UsuarioController::class, 'telaCadastro'])->name('cadastro');
    Route::post('/cadastro', [UsuarioController::class, 'store']);

    Route::get('/login', [AuthController::class, 'telaLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/perfil', function () {
        return view('dashboard.perfil');
    })->name("perfil");

    Route::get('/turma', function () {
        return view('turma');
    })->name("turma");

    Route::get('/relatorio', function () {
        return view('relatorio');
    })->name("relatorio");

    Route::get('/desafios', function () {
        return view('desafios');
    })->name("desafios");

    Route::get('/placar', function () {
        return view('placar');
    })->name("placar");
});

Route::get('/trocar-senha', function () {
    return view('trocarsenha');
});