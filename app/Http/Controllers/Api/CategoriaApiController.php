<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaApiController extends Controller
{
    public function index(){
        $categorias = Categoria::All();
        return response()->json($categorias);
    }
}
