<?php

namespace App\Http\Controllers;

class ClienteController
{
    public function clientes($id)
    {
        return [
            ["ID" => $id, "nome" => "João da Silva"],
        ];
    }
}
