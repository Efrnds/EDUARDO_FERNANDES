<?php
use App\Http\Controllers\ClienteController;
$controller = new ClienteController();
$clientes = $controller->clientes($id);
?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" text-[#fdfdfc] flex p-6 lg:p-8 items-center justify-center min-h-screen flex-col">
    <div
        class="h-fit flex flex-col gap-4 bg-black/20 backdrop-blur-sm border border-white/50 rounded-lg shadow-[inset_0_1px_0px_rgba(255,255,255,0.75),0_0_9px_rgba(0,0,0,0.2),0_3px_8px_rgba(0,0,0,0.15)] p-6 relative before:absolute before:inset-0 before:rounded-lg before:bg-gradient-to-br before:from-white/60 before:via-transparent before:to-transparent before:opacity-70 before:pointer-events-none after:absolute after:inset-0 after:bg-gradient-to-tl after:from-white/30 after:via-transparent after:to-transparent after:opacity-50 after:pointer-events-none ">
        <div class="flex w-full justify-between gap-2">
            <h1 class=" w-full text-2xl font-bold text-left">Cliente</h1>
            <a href="/"
                class="text-slate-200 hover:text-white text-lg my-auto border-[1px] bg-slate-100/10 hover:bg-slate-100/20 antialiased border-slate-200 rounded-md px-2 h-fit transition">voltar</a>
        </div>
        <hr class="border border-white/50 rounded-full">
        <div class="p-4 border border-white/30 rounded-lg bg-white/5">
            <p class="text-slate-200">
                Usuário encontrado com o id <span class="font-bold">{{ $clientes[0]['ID'] }}</span> e o nome <span
                    class="font-bold">{{ $clientes[0]['nome']}}</span>
            </p>
        </div>
    </div>
</body>

</html>
