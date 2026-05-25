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

    Route::get('/esqueci-senha', [AuthController::class, 'telaEsqueciSenha'])->name('trocar-senha');
    Route::post('/esqueci-senha', [AuthController::class, 'verificarEmail'])->name('verificar-email');

    Route::get('/verificar-codigo', [AuthController::class, 'telaVerificarCodigo'])->name('verificar-codigo');
    Route::post('/verificar-codigo', [AuthController::class, 'validarCodigo'])->name('validar-codigo');
    Route::post('/reenviar-codigo', [AuthController::class, 'reenviarCodigo'])->name('reenviar-codigo');

    Route::get('/redefinir-senha', [AuthController::class, 'telaRedefinirSenha'])->name('redefinir-senha');
    Route::post('/redefinir-senha', [AuthController::class, 'atualizarSenha'])->name('atualizar-senha');
});

Route::get('/login', [AuthController::class, 'telaLogin'])->name('login');

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