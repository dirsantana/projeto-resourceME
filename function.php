<?php

$servicos = [
    [
        "nome" => "Desenvolvimento Web",
        "image" => "img/undraw_marketing_v0iu.svg",
        "descricao" => "Sites dinamicos, otimizados para motores de busca",
    ],
    [
        "nome" => "Marketing Digital",
        "image" => "img/undraw_modern_professional_yt9h.svg",
        "descricao" => "Alcance um publico maior, venda mais rapido",
    ],
    [
        "nome" => "Consultoria UX",
        "image" => "img/undraw_all_the_data_h4ki.svg",
        "descricao" => "Ofereca a melhor experiencia para seus usuarios",
    ],
    [
        "nome" => "Mobile",
        "image" => "img/undraw_marketing_v0iu.svg",
        "descricao" => "APPs Dinamicos",
    ],
    [
        "nome" => "Inteligencia Artifical",
        "image" => "img/undraw_modern_professional_yt9h.svg",
        "descricao" => "Super Cerebro",
    ],
    [
        "nome" => "Consultoria Master",
        "image" => "img/undraw_all_the_data_h4ki.svg",
        "descricao" => "Melhor Consultoria",
    ]
    ];

function listarServicos() {

        // echo "<pre>";
        // var_dump($servicos);
        global $servicos;
        foreach ($servicos as $index => $servico) {
            // echo "<h1>$servico[nome]</h1>";
            // echo "<img src='$servico[image]'>";
            // echo "<p>$servico[descricao]</p>";
            echo "<div class='col-md-4 mt-4'>
            <div class='card'>
                <img src='$servico[image]' class='card-img-top' alt='...'>
                <div class='card-body'>
                     <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
                </div>
            </div>
            </div>";
        }
}

function getNome($id) {
    global $servicos;
    return $servicos[$id]["nome"];

}