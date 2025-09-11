<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" text-[#fdfdfc] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
    <div class="flex items-center justify-center w-full">
        <div
            class="w-full h-fit flex flex-col gap-4 bg-black/20 backdrop-blur-sm border border-white/50 rounded-lg shadow-[inset_0_1px_0px_rgba(255,255,255,0.75),0_0_9px_rgba(0,0,0,0.2),0_3px_8px_rgba(0,0,0,0.15)] p-6 relative before:absolute before:inset-0 before:rounded-lg before:bg-gradient-to-br before:from-white/60 before:via-transparent before:to-transparent before:opacity-70 before:pointer-events-none after:absolute after:inset-0 after:bg-gradient-to-tl after:from-white/30 after:via-transparent after:to-transparent after:opacity-50 after:pointer-events-none ">
            <div class="flex w-full justify-between gap-2">
                <h1 class="w-full text-2xl font-bold text-left ">Dashboard</h1>
            </div>
            <hr class="border border-white/50 rounded-full">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full">
                <a href="/blog"
                    class="flex flex-col gap-2 p-4 border border-white/30 rounded-lg hover:bg-white/10 transition-colors">
                    <h3 class="text-lg font-semibold text-slate-100">Blog</h3>
                    <p class="text-sm text-slate-200">Últimas postagens do blog</p>
                </a>

                <a href="/clientes/23"
                    class="flex flex-col gap-2 p-4 border border-white/30 rounded-lg hover:bg-white/10 transition-colors">
                    <h3 class="text-lg font-semibold text-slate-100 ">Clientes</h3>
                    <p class="text-sm text-slate-200">Gerenciar clientes</p>
                </a>

                <a href="/produtos"
                    class="flex flex-col gap-2 p-4 border border-white/30 rounded-lg hover:bg-white/10 transition-colors">
                    <h3 class="text-lg font-semibold text-slate-100 ">Produtos</h3>
                    <p class="text-sm text-slate-200">Lista de produtos</p>
                </a>

                <a href="/tarefas"
                    class="flex flex-col gap-2 p-4 border border-white/30 rounded-lg hover:bg-white/10 transition-colors">
                    <h3 class="text-lg font-semibold text-slate-100 ">Tarefas</h3>
                    <p class="text-sm text-slate-200">Seus afazeres</p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
