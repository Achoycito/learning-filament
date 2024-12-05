<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FolderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mapa', [FolderController::class, 'index']);
