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

                    <h1 class="text-[20px] font-bold">Editar Notícia</h1>
                    <a href="{{ route('admin.noticias.index') }}"
                        class=" text-slate-500 font-semibold px-4 py-2 rounded"><- Voltar para notícias</a>

                </div>

                <div class="p-6 overflow-x-auto">

                    <form action="#" method="post">

                        @include('admin.noticias._form')

                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
