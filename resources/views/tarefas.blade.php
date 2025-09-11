<?php
use App\Http\Controllers\TarefaController;
$controller = new TarefaController();
$tarefas = $controller->listar();
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
        class="h-fit flex flex-col gap-4 bg-black/20 backdrop-blur-sm border border-white/50 rounded-lg shadow-[inset_0_1px_0px_rgba(255,255,255,0.75),0_0_9px_rgba(0,0,0,0.2),0_3px_8px_rgba(0,0,0,0.15)] p-6 relative before:absolute before:inset-0 before:rounded-lg before:bg-gradient-to-br before:from-white/60 before:via-transparent before:to-transparent before:opacity-70 before:pointer-events-none after:absolute after:inset-0 after:bg-gradient-to-tl after:from-white/30 after:to-transparent after:opacity-50 after:pointer-events-none ">
        <div class="flex w-96 justify-between gap-2">
            <h1 class=" w-full text-2xl font-bold text-left">Seus afazeres</h1>
            <a href="/"
                class="text-slate-200 hover:text-white text-lg my-auto border-[1px] bg-slate-100/10 hover:bg-slate-100/20 antialiased border-slate-200 rounded-md px-2 h-fit transition">voltar</a>
        </div>
        <hr class="border border-white/50 rounded-full">
        <div class="flex flex-col gap-3">
            @foreach($tarefas as $index => $tarefa)
                <ul>
                    <li class="flex gap-3 p-3 border border-white/30 rounded-lg bg-white/5 cursor-pointer hover:bg-white/10 transition-colors"
                        onclick="toggleCheckbox({{ $index }})">
                        <input type="checkbox" name="" id="checkbox-{{ $index }}"
                            class="size-4 my-auto accent-slate-200 pointer-events-none">
                        <p class="text-slate-200">
                            {{ $tarefa['tarefa'] }}
                        </p>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>

    <script>
        function toggleCheckbox(index) {
            const checkbox = document.getElementById('checkbox-' + index);
            checkbox.checked = !checkbox.checked;
        }
    </script>
</body>

</html>
