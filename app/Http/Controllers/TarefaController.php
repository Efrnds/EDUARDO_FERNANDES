<?php

namespace App\Http\Controllers;

class TarefaController
{
    public function listar()
    {
        return [
            ["tarefa" => "Estudar Laravel"],
            ["tarefa" => "Criar projeto React"],
            ["tarefa" => "Revisar código PHP"],
            ["tarefa" => "Fazer backup do banco"],
            ["tarefa" => "Atualizar documentação"],
            ["tarefa" => "Testar API endpoints"],
        ];
    }
}
