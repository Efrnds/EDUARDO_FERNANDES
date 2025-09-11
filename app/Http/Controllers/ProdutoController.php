<?php

namespace App\Http\Controllers;

class ProdutoController
{
    public function listar()
    {
        return [
            ["nome" => "Apple Watch Ultra 3", "valor" => 14999.99],
            ["nome" => "Mouse Redragon King Pro", "valor" => 251.99],
            ["nome" => "Lays sabor cebola", "valor" => 11.99]
        ];
    }
}
