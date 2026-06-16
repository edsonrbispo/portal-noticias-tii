<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('titulo', 'PortalBR - Seu portal de notícias')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    @vite('resources/css/app.css')


</head>

<body class="bg-slate-50 flex flex-col min-h-screen">
    <header class="bg-white shadow-md">
        <div class="max-w-7xl mx-auto flex justify-between p-2 items-center">
            <div class="font-bold text-xl text-slate-800"><img src="assets/img/logo.svg"></div>
            <nav class="text-sm font-medium flex gap-6">
                <a href="{{ route('home') }}" class="text-slate-600 hover:text-blue-600 py-2">Home</a>
                <a href="{{ route('contato') }}" class="text-slate-600 hover:text-blue-600 py-2">Contato</a>
                <a href="{{ route('login') }}" class="py-2 bg-blue-500 px-2 text-white rounded-sm">Login</a>
            </nav>
        </div>
    </header>

    <main class="flex-1 w-full max-w-7xl mx-auto px-4 py-8">

        @yield('conteudo')

    </main>

    <footer class="bg-slate-900 text-slate-400 text-sm">
        <div class="max-w-7xl mx-auto px-8 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <div>
                    <h4 class="font-medium mb-1 text-white">BlogNews</h4>
                    <p>Plataforma criada em aula para aprender PHP, MySQL e PDO ná prática</p>
                </div>
                <div>
                    <h4 class="font-medium mb-1 text-white">Navegar</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-medium mb-1 text-white">Tags</h4>
                    <div class="flex gap-2 flex-wrap">
                        <span class="bg-slate-800 px-2 py-0.5 rounded">PHP 8</span>
                        <span class="bg-slate-800 px-2 py-0.5 rounded">MySql</span>
                        <span class="bg-slate-800 px-2 py-0.5 rounded">PDO</span>
                        <span class="bg-slate-800 px-2 py-0.5 rounded">Tailwindcss</span>
                        <span class="bg-slate-800 px-2 py-0.5 rounded">MVC</span>
                    </div>
                </div>
            </div>
            <div class="text-center border-t pt-3 border-slate-700">
                &copy; 2026 BlogNews - Todos os direitos são reservados
            </div>
        </div>
    </footer>


</body>

</html>
