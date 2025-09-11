<?php
use App\Http\Controllers\BlogController;
$controller = new BlogController();
$postagens = $controller->ultimosPosts();
?>

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
    <div
        class="h-fit flex flex-col gap-4 bg-black/20 backdrop-blur-sm border border-white/50 rounded-lg shadow-[inset_0_1px_0px_rgba(255,255,255,0.75),0_0_9px_rgba(0,0,0,0.2),0_3px_8px_rgba(0,0,0,0.15)] p-6 relative before:absolute before:inset-0 before:rounded-lg before:bg-gradient-to-br before:from-white/60 before:via-transparent before:to-transparent before:opacity-70 before:pointer-events-none after:absolute after:inset-0 after:bg-gradient-to-tl after:from-white/30 after:via-transparent after:to-transparent after:opacity-50 after:pointer-events-none ">
        <div class="flex w-full justify-between gap-2">
            <h1 class="my-auto w-full text-2xl font-bold text-left">Últimas postagens</h1>
            <a href="/"
                class="text-slate-200 antialiased hover:text-white text-lg my-auto border-[1px] bg-slate-100/10 hover:bg-slate-100/20  border-slate-200 rounded-md px-2 h-fit transition">voltar</a>
        </div>
        <hr class="border border-white/50 rounded-full">
        <div class="flex flex-col gap-5">
            @foreach($postagens as $post)
                <div class="flex flex-col justify-between gap-4 p-4 border border-white/30 rounded-lg bg-white/5">
                    <h3 class="text-lg text-slate-200 font-bold">
                        {{ $post['titulo'] }}
                    </h3>
                    <p class="text-slate-400 text-sm">
                        {{ $post['data']}}
                    </p>
                    <p class="text-slate-200">
                        {{ $post['descricao'] }}
                    </p>
                </div>
            @endforeach
        </div>

        <!-- Rodapé -->
        <hr class="border border-white/30 rounded-full mt-4">
        <footer class="flex flex-col gap-2 text-center">
            <p class="text-slate-400 text-sm">
                Blog desenvolvido por <a class="text-blue-500" href="https://github.com/Efrnds"
                    target="_blank">@efrnds</a>
            </p>
            <div class="flex justify-center gap-4 text-xs">
                <span class="text-slate-500">{{ count($postagens) }} postagens</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-500">Última atualização: {{ date('d/m/Y') }}</span>
            </div>
        </footer>
    </div>
</body>

</html>
