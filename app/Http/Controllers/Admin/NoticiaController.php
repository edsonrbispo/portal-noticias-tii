<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
            'categorias'=>$categorias,
            'noticia' => new Noticia()
       ]);
    }

    /**
     * Armazenar os Dados da noticias, enviado pelo formulário
     */
    public function store(Request $request)
    {
       // dd($request);

       $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:10|max:255',
            'resumo' => 'required',
            'conteudo' => 'required',
            'imagem' => 'required|image|mimes:jpge,jpg,png,webp|max:2048'
       ]);

       $noticia = new Noticia();

       $noticia->titulo = $request->titulo;
       $noticia->resumo = $request->resumo;
       $noticia->conteudo = $request->conteudo;
       $noticia->categoria_id = $request->categoria_id;
       $noticia->ativo = $request->ativo;
       $noticia->usuario_id = Auth::user()->id;

      if($request->hasFile('imagem')){
            $noticia->imagem = $request->file('imagem')->store('noticias', 'public');
      }
    
      $noticia->save();

      return redirect()->route('admin.noticias.index');

    }

    /**
     * Chamar a view do editar noticias
     */
    public function edit(string $id)
    {
        $categorias = Categoria::orderBy('nome', 'ASC')->pluck('nome', 'id');

        $noticia = Noticia::findOrFail($id);

        return view("admin.noticias.editar",[
            'categorias' => $categorias,
            'noticia' => $noticia
        ]);
    }

    /**
     * Armazenar a atualização dos dados da notícia
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'categoria_id' => 'required',
            'titulo' => 'required|min:10|max:255',
            'resumo' => 'required',
            'conteudo' => 'required',
            'imagem' => 'nullable|image|mimes:jpge,jpg,png,webp|max:2048'
        ]);

        $noticia = Noticia::findOrFail($id);

        $noticia->titulo = $request->titulo;
        $noticia->resumo = $request->resumo;
        $noticia->conteudo = $request->conteudo;
        $noticia->categoria_id = $request->categoria_id;
        $noticia->ativo = $request->ativo;
        $noticia->usuario_id = Auth::user()->id;

        if ($request->hasFile('imagem')) {

            if($noticia->imagem){
                Storage::disk('public')->delete($noticia->imagem);
            }

            $noticia->imagem = $request->file('imagem')->store('noticias', 'public');

        }

        $noticia->save();

        return redirect()->route('admin.noticias.index');
    }

    /**
     * Excluir uma notícia do banco de dados
     */
    public function destroy(string $id)
    {
        return "Funcionou...Deletou o registro!";
    }
}
