@extends('layouts.site')

{{-- @section('titulo', 'Home - Seu portal de notícias') --}}

@section('conteudo')
    <div>
        <h2 class="text-2xl font-bold text-slate-800">Últimas Notícias</h2>
        <p class="text-slate-500 text-sm">3 notícias publicadas</p>
    </div>

    <!-- Lista de Categorias -->
    <div class="flex gap-3 mt-5">
        <a href="#" class="bg-[#2196f3] text-white px-4 py-1 rounded-full">Todas</a>
        <a href="#" class="bg-[#4caf50] text-white px-4 py-1 rounded-full">Tecnologia</a>
        <a href="#" class="bg-[#ff9800] text-white px-4 py-1 rounded-full">Educação</a>
        <a href="#" class="bg-[#a621f3] text-white px-4 py-1 rounded-full">Negócios</a>
    </div>

    <div class="grid grid-1 lg:grid-cols-3 gap-6 my-10">

        <!-- Inicio Card Noticias  -->
        <article class="bg-white shadow-sm hover:shadow-md rounded-xl border border-slate-200 overflow-hidden group">
            <div class="h-44 relative overflow-hidden">
                <img src="https://placehold.co/600x300/3B82F6/FFFFFF?text=Imagem+Capa" alt="Imagem Capa"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-5">
                <span class="bg-[#2196f3] text-white px-4 py-1 rounded-full text-xs mb-4 inline-block">Tecnologia</span>
                <h3 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600">PHP Continua Dominando o
                    Desenvolvimento
                    Web</h3>
                <p class="text-sm text-slate-500 mb-4">Descubra por que PHP segue sendo a linguagem mais utilizada
                    para o
                    desenvolvimento de
                    aplicações Web</p>
                <div class="text-xs text-slate-400 border-t border-slate-100 pt-3">
                    06/05/2026
                </div>
            </div>
        </article>
        <!-- Fim CardNoticias -->

        <article class="bg-white shadow-sm hover:shadow-md rounded-xl border border-slate-200 overflow-hidden group">
            <div class="h-44 relative overflow-hidden">
                <img src="https://placehold.co/600x300/3B82F6/FFFFFF?text=Imagem+Capa" alt="Imagem Capa"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-5">
                <span class="bg-[#2196f3] text-white px-4 py-1 rounded-full text-xs mb-4 inline-block">Tecnologia</span>
                <h3 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600">PHP Continua Dominando o
                    Desenvolvimento
                    Web</h3>
                <p class="text-sm text-slate-500 mb-4">Descubra por que PHP segue sendo a linguagem mais utilizada
                    para o
                    desenvolvimento de
                    aplicações Web</p>
                <div class="text-xs text-slate-400 border-t border-slate-100 pt-3">
                    06/05/2026
                </div>
            </div>
        </article>

        <article class="bg-white shadow-sm hover:shadow-md rounded-xl border border-slate-200 overflow-hidden group">
            <div class="h-44 relative overflow-hidden">
                <img src="https://placehold.co/600x300/3B82F6/FFFFFF?text=Imagem+Capa" alt="Imagem Capa"
                    class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            </div>
            <div class="p-5">
                <span class="bg-[#2196f3] text-white px-4 py-1 rounded-full text-xs mb-4 inline-block">Tecnologia</span>
                <h3 class="font-bold text-slate-800 mb-2 group-hover:text-blue-600">PHP Continua Dominando o
                    Desenvolvimento
                    Web</h3>
                <p class="text-sm text-slate-500 mb-4">Descubra por que PHP segue sendo a linguagem mais utilizada
                    para o
                    desenvolvimento de
                    aplicações Web</p>
                <div class="text-xs text-slate-400 border-t border-slate-100 pt-3">
                    06/05/2026
                </div>
            </div>
        </article>

    </div>

    <div class="flex justify-center items-center gap-1.5">
        <a href="#"
            class="bg-slate-100 text-sm font-semibold rounded-lg px-3 py-1.5 border border-slate-200">Anterior</a>

        <a href="#" class="bg-slate-100 text-sm font-semibold rounded-lg px-3 py-1.5 border border-slate-200">1</a>

        <a href="#" class="bg-slate-300 text-sm font-semibold rounded-lg px-3 py-1.5 border border-slate-200">2</a>

        <a href="#" class="bg-slate-100 text-sm font-semibold rounded-lg px-3 py-1.5 border border-slate-200">3</a>

        <a href="#"
            class="bg-slate-100 text-sm  font-semibold rounded-lg px-3 py-1.5 border border-slate-200">Próximo</a>
    </div>
@endsection
