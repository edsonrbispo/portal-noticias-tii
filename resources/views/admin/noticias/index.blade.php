<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Notícias
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex justify-between items-center">

                    <h1 class="text-[20px] font-bold">Lista de Notícias</h1>
                    <a href="{{ route('admin.noticias.cadastrar') }}" class="bg-slate-950 text-white px-4 py-2 rounded">+
                        Adicionar Notícia</a>

                </div>

                <div class="p-6 overflow-x-auto">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TÍTULO</th>
                                <th class="hidden sm:table-cell">RESUMO</th>
                                <th class="hidden sm:table-cell">CATEGORIA</th>
                                <th class="w-[130px]">PUBLICAÇÃO</th>
                                <th class="text-center w-[130px]">AÇÃO</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($noticias as $n)
                                <tr>
                                    <td>{{ $n->id }}</td>
                                    <td>{{ $n->titulo }}</td>
                                    <td class="hidden sm:table-cell">{{ $n->resumo }}</td>
                                    <td class="hidden sm:table-cell">{{ $n->categoria_id }}</td>
                                    <td>
                                        {{ $n->created_at->format('d/m/Y H:i') }}
                                        <br>
                                        {{ $n->created_at->diffForHumans() }}

                                    </td>
                                    <td class="text-center flex gap-1">
                                        <a href="{{ route('admin.noticias.editar', $n->id) }}"
                                            class="btn-editar">Editar</a>

                                        <form action="{{ route('admin.noticias.excluir', $n->id) }}" method="post">
                                            @method('delete')
                                            @csrf

                                            <button type="submit" class="btn-excluir"
                                                onclick="return confirm('Deseja Excluir o registro?')">Excluir</button>

                                        </form>


                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center text-slate-400" colspan="6">
                                        <p>Nenhuma notícia cadastrada</p>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <div class="flex justify-center p-6 pt-0">
                    //Paginação
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
