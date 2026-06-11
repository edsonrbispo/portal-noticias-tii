<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"]);
Route::get("/noticia", [HomeController::class, "visualizarNoticias"]);
