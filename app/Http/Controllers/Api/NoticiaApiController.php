<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class NoticiaApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticia::all();

        return response()->json($noticias);


    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

        if ($request->hasFile('imagem')) {
            $noticia->imagem = $request->file('imagem')->store('noticias', 'public');
        }

        $noticia->save();

        return response()->json([
            'mensagem' => 'Notícia cadastrada com sucesso.',
            'data' => $noticia
        ],201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       $noticia = Noticia::findOrFail($id);
       return response()->json($noticia);
    }

   
    /**
     * Update the specified resource in storage.
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

            if ($noticia->imagem) {
                Storage::disk('public')->delete($noticia->imagem);
            }

            $noticia->imagem = $request->file('imagem')->store('noticias', 'public');
        }

        $noticia->save();

        return response()->json([
            'mensagem' => 'Notícia atualizada com sucesso.',
            'data' => $noticia
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $noticia = Noticia::findOrFail($id);
        $noticia->delete();
        return response()->json([
            'mensagem' => 'Notícia removida com sucesso.'
          
        ]);
    }
}
