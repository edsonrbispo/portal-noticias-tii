@extends('layouts.site')


@section('conteudo')
    <div class="max-w-3xl mx-auto">
        <article class="bg-white rounded-xl border border-slate-200 shadow-sm overflow-hidden">

            <div class="h-80 overflow-hidden bg-slate-100">
                <img src="https://placehold.co/900x400/3B82F6/FFFFFF?text=Imagem+da+Noticia" alt="Título da notícia"
                    class="w-full h-full object-cover">

            </div>


            <div class="p-8">


                <div class="flex items-center gap-3 mb-5">
                    <span class="text-xs font-bold text-white px-3 py-1 rounded-full" style="background-color: #2196F3">
                        Tecnologia

                    </span>
                    <span class="text-xs text-slate-400">
                        Publicado em 06/05/2024 às 10:30

                    </span>
                </div>


                <h1 class="text-3xl font-bold text-slate-900 leading-tight mb-4">
                    PHP Continua Dominando o Desenvolvimento Web
                </h1>

                <div class="text-slate-700 leading-relaxed space-y-4">
                    <p>
                        PHP é uma linguagem de script server-side que continua evoluindo e se
                        adaptando às necessidades modernas do desenvolvimento web. Com frameworks
                        poderosos como Laravel, Symfony e CodeIgniter, PHP permite criar aplicações
                        robustas e escaláveis.
                    </p>
                    <p>
                        A comunidade PHP é extremamente ativa, oferecendo inúmeras bibliotecas e
                        ferramentas que facilitam o desenvolvimento. Desde a criação de APIs REST
                        até aplicações web complexas, PHP prova ser uma escolha excelente para
                        profissionais de todos os níveis.
                    </p>
                    <p>
                        Se você está começando a aprender programação web, PHP é uma excelente
                        escolha para entender os fundamentos de como aplicações web funcionam.
                    </p>
                </div>


                <div class="mt-10 pt-6 border-t border-slate-200 flex items-center justify-between gap-4 flex-wrap">

                    <a href="#top"
                        class="inline-flex items-center gap-2 text-sm text-slate-500 hover:text-blue-600 transition-colors font-medium">
                        <i class="fa-solid fa-arrow-left"></i>
                        Voltar
                    </a>



                </div>

            </div>
        </article>
    </div>
@endsection
