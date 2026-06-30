<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Lista as Notícias do Banco
     */
    public function index()
    {
        $categorias = Categoria::all();

        return view('admin.categorias.index',[
            'categorias' => $categorias
        ]);

       
    }

    /**
     * Chamar a view do cadastrar noticias
     */
    public function create()
    {
        //
    }

    /**
     * Armazenar os Dados da noticias, enviado pelo formulário
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Chamar a view do editar noticias
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Armazenar a atualização dos dados da notícia
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Excluir uma notícia do banco de dados
     */
    public function destroy(string $id)
    {
        //
    }
}
