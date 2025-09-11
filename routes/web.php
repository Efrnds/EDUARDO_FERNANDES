<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Rotas básicas
Route::get('/contato', function () {
    return "Essa é a página de contato da empresa X";
});

Route::get("/saudacao/{nome}", function ($nome) {
    return "Olá $nome! Seja bem vindo(a) ao sistema.";
});

Route::get("/dobro/{numero}", function ($numero) {
    $dobro = $numero * 2;
    return "O dobro de $numero é $dobro";
});

Route::get("/dataHora", function () {
    date_default_timezone_set('America/Sao_Paulo');
    $data = date("d-m-Y");
    $hora = date("h:i:s");

    return "A data é $data <br> E a hora é $hora";
});

// Rotas com HTML
Route::get("/tecnologias", function () {
    return '
    <div style="font-family: Arial;">
        <h1>Minhas tecnologias favoritas!</h1>
        <ol>
            <li>NextJS</li>
            <li>NodeJS</li>
            <li>TailwindCSS</li>
            <li>React</li>
            <li>n8n</li>
        </ol>
    </div>
    ';
});

Route::get("/links", function () {
    return '
    <div style="font-family: Arial;">
        <h1>Links úteis na vida de um dev.</h1>
        <ol>
            <li>
                <a href="https://github.com/" target=__blank>Salve os seus projetos no Github</a>
            </li>
            <li>
                <a href="https://www.tabnews.com.br/" target=__blank>Notícias sobre a bolha dev</a>
            </li>
            <li>
                <a href="https://open.spotify.com/show/4lnHkF0yir9ZP2bGenFCSB" target=__blank>Podcast sobre a bolha dev</a>
            </li>
            <li>
                <a href="https://puter.com" target=__blank>Computador direto no navegador</a>
            </li>
            <li>
                <a href="https://tailwindcss.com/docs/installation/using-vite" target=__blank>Iniciando com o TailwindCSS</a>
            </li>
        </ol>
    </div>
    ';
});

Route::get("/noticias", function () {
    return '
    <div style="font-family: Arial;">
        <h1>Últimas notícias!</h1>
        <ol>
            <li>
                <h2>
                    Xandão proíbe o whatsapp em todo o território brasileiro.
                </h2>
                <p>
                    Clique e saiba mais!
                </p>
            </li>
            <li>
                <h2>
                    Elon Musk cria o primeiro robô residencial.
                </h2>
                <p>
                    Clique e saiba mais!
                </p>
            </li>
            <li>
                <h2>
                    Java terá suporte oficial à máquina de café.
                </h2>
                <p>
                    Clique e saiba mais!
                </p>
            </li>
        </ol>
    </div>
    ';
});

// Rotas com Controllers
Route::get("/produtos", function () {
    return view('produtos');
});

Route::get("/clientes/{id}", function ($id) {
    return view('clientes', ['id' => $id]);
});

Route::get("/blog", function () {
    return view('blog');
});

Route::get("/tarefas", function () {
    return view('tarefas');
});
