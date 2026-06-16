<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name('home');
Route::get("/noticia", [HomeController::class, "visualizarNoticias"])->name('visualizarNoticias');
Route::get("/contato",[HomeController::class, "contato"])->name('contato');

