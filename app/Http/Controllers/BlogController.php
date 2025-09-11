<?php

namespace App\Http\Controllers;

class BlogController
{
    public function ultimosPosts()
    {
        return [
            [
                "titulo" => "Introdução ao Laravel: Primeiros passos",
                "descricao" => "Laravel é um dos frameworks PHP mais populares do mundo. Aprenda como criar sua primeira aplicação e entenda os conceitos fundamentais...",
                "data" => "12 de Setembro de 2025"
            ],
            [
                "titulo" => "Segurança em aplicações web: Melhores práticas",
                "descricao" => "Laravel é um dos frameworks PHP mais populares do mundo. Aprenda como criar sua primeira aplicação e entenda os conceitos fundamentais...",
                "data" => "5 de Julho de 2025"
            ],
            [
                "titulo" => "Como melhorar a performance do seu código PHP",
                "descricao" => "A segurança é fundamental no desenvolvimento web. Veja como proteger sua aplicação contra as principais vulnerabilidades...",
                "data" => "15 de Janeiro de 2024"
            ],
        ];
    }
}
