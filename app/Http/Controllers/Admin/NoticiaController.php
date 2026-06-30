<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    /**
     * Lista as Notícias do Banco
     */
    public function index()
    {
        $noticias = Noticia::all();

        return view('admin.noticias.index',[
            'noticias' => $noticias
        ]);

       
    }

    /**
     * Chamar a view do cadastrar noticias
     */
    public function create()
    {
        $categorias = Categoria::orderBy('nome','ASC')->pluck('nome','id');
       return view("admin.noticias.cadastrar",[
            'categorias'=>$categorias
       ]);
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
        return view("admin.noticias.editar");
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
        return "Funcionou...Deletou o registro!";
    }
}
