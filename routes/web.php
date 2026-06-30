<?php

use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class, "home"])->name('home');
Route::get("/noticia", [HomeController::class, "visualizarNoticias"])->name('visualizarNoticias');
Route::get("/contato", [HomeController::class, "contato"])->name('contato');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rotas do Gerenciamento de Notícias
    Route::get('/dashboard/noticias',[NoticiaController::class, "index"])->name('admin.noticias.index');

    Route::get('/dashboard/noticias/cadastrar', [NoticiaController::class, "create"])->name('admin.noticias.cadastrar');

    Route::post('/dashboard/noticias/cadastrar', [NoticiaController::class, "store"])->name('admin.noticias.armazenar');

    Route::get('/dashboard/noticias/editar/{id}', [NoticiaController::class, "edit"])->name('admin.noticias.editar');

    Route::delete('/dashboard/noticias/excluir/{id}', [NoticiaController::class, "destroy"])->name('admin.noticias.excluir');

    //Rotas do Gerenciamento de Categorias
    Route::get('/dashboard/categorias', [CategoriaController::class, "index"])->name('admin.categorias.index');

});

require __DIR__.'/auth.php';
