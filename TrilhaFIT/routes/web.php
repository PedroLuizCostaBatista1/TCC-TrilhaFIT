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