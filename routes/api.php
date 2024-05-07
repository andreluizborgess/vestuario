<?php

use App\Http\Controllers\RoupaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('cadastroRoupas',[RoupaController::class, 'cadastroRoupas']);

Route::get('pesquisaCategoria',[RoupaController::class, 'pesquisaCategoria']);