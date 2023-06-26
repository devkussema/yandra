<?php

use Illuminate\Support\Facades\Route;

Route::get('/rota', function () {
    return 'Olá do pacote Routes!';
})->name('suarota');

// Defina outras rotas aqui...

