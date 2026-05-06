<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('boasvindas');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/perfil', function () {
    return view('perfil');
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