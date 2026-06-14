<?php

use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('boasvindas');
});

Route::get('/cadastro', [UsuarioController::class, 'telaCadastro'])->name('cadastro');
Route::post('/cadastro', [UsuarioController::class, 'cadastrar']);

Route::get('/login', [AuthController::class, 'telaLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/esqueci-senha', [AuthController::class, 'telaEsqueciSenha'])->name('trocar-senha');
Route::post('/esqueci-senha', [AuthController::class, 'verificarEmail'])->name('verificar-email');

Route::get('/verificar-codigo', [AuthController::class, 'telaVerificarCodigo'])->name('verificar-codigo');
Route::post('/verificar-codigo', [AuthController::class, 'validarCodigo'])->name('validar-codigo');
Route::post('/reenviar-codigo', [AuthController::class, 'reenviarCodigo'])->name('reenviar-codigo');

Route::get('/redefinir-senha', [AuthController::class, 'telaRedefinirSenha'])->name('redefinir-senha');
Route::post('/redefinir-senha', [AuthController::class, 'atualizarSenha'])->name('atualizar-senha');

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/perfil', [PerfilController::class, 'exibirEstatisticas'])->name('perfil');
    Route::get('/perfil/editar', [UsuarioController::class, 'editar'])->name('perfil-editar');
    Route::put('/perfil/editar', [UsuarioController::class, 'atualizar'])->name('perfil-atualizar');
    Route::delete('/perfil/deletar', [UsuarioController::class, 'deletar'])->name('perfil-deletar');

    Route::get('/turma/criar', [TurmaController::class, 'criar'])->name('turma.criar');
    Route::post('/turma/salvar', [TurmaController::class, 'salvar'])->name('turma.salvar');

    Route::get('/turma/entrar', [TurmaController::class, 'entrar'])->name('turma.entrar');
    Route::post('/turma/entrar', [TurmaController::class, 'entrarComCodigo'])->name('turma.entrarComCodigo');
    Route::post('/turma/sair', [TurmaController::class, 'sair'])->name('turma.sair');

    Route::get('/turma', [TurmaController::class, 'index'])->name('turma');
    Route::get('/turma/{id}', [TurmaController::class, 'exibir'])->name('turma.exibir');

    Route::get('/turma/{id}/editar', [TurmaController::class, 'editar'])->name('turma.editar');
    Route::put('/turma/{id}/atualizar', [TurmaController::class, 'atualizar'])->name('turma.atualizar');
    Route::delete('/turma/{id}/deletar', [TurmaController::class, 'deletar'])->name('turma.deletar');

    Route::get('/relatorio', function () {
        return view('dashboard.relatorio');
    })->name("relatorio");

    Route::get('/desafios', function () {
        return view('dashboard.desafios');
    })->name("desafios");
});