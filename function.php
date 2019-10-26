<?php

session_start();

// $servicos = [
//     [
//         "nome" => "Desenvolvimento Web",
//         "imagem" => "img/undraw_marketing_v0iu.svg",
//         "descricao" => "Sites dinamicos, otimizados para motores de busca",
//     ],
//     [
//         "nome" => "Marketing Digital",
//         "imagem" => "img/undraw_modern_professional_yt9h.svg",
//         "descricao" => "Alcance um publico maior, venda mais rapido",
//     ],
//     [
//         "nome" => "Consultoria UX",
//         "imagem" => "img/undraw_all_the_data_h4ki.svg",
//         "descricao" => "Ofereca a melhor experiencia para seus usuarios",
//     ],
//     [
//         "nome" => "Mobile",
//         "imagem" => "img/undraw_marketing_v0iu.svg",
//         "descricao" => "APPs Dinamicos",
//     ],
//     [
//         "nome" => "Inteligencia Artifical",
//         "imagem" => "img/undraw_modern_professional_yt9h.svg",
//         "descricao" => "Super Cerebro",
//     ],
//     [
//         "nome" => "Consultoria Master",
//         "imagem" => "img/undraw_all_the_data_h4ki.svg",
//         "descricao" => "Melhor Consultoria",
//     ]
//     ];

//versao 1 de listar servicos usando Array
// function listarServicos() {

//         // echo "<pre>";
//         // var_dump($servicos);
//         global $servicos;
//         foreach ($servicos as $index => $servico) {
//             // echo "<h1>$servico[nome]</h1>";
//             // echo "<img src='$servico[image]'>";
//             // echo "<p>$servico[descricao]</p>";
//             echo "<div class='col-md-4 mt-4'>
//             <div class='card'>
//                 <img src='$servico[imagem]' class='card-img-top' alt='...'>
//                 <div class='card-body'>
//                      <p class='card-text text-center'><a href='servico.php?id=$index'>$servico[nome]</a></p>
//                 </div>
//             </div>
//             </div>";
//         }
// }

function getNome($id) {
    global $servicos;
    return $servicos[$id]["nome"];

}


function getDescricao($id)
{
    global $servicos;
    return $servicos[$id]["descricao"];
}

function getImagem($id)
{
    global $servicos;
    return $servicos[$id]["imagem"];
}

if (isset($_POST['cadastrar_servico'])) {
    // var_dump($_POST);
    $arquivoServicos = 'servicos.json';
    
    $imagemServico = '';

    if($_FILES) {
        $nome = $_FILES['imagem']['name'];
        $nomeTemp = $_FILES['imagem']['tmp_name'];
        $erro = $_FILES['imagem']['error'];
        $pastaRaiz = dirname(__FILE__);
        $pasta = "servicos/";
        $caminhoCompleto = $pastaRaiz . '/' . $pasta .  $nome;

        if ($erro == UPLOAD_ERR_OK) {
            move_uploaded_file($nomeTemp, $caminhoCompleto);
            $imagemServico = $pasta . $nome;
        }

    }

    if (file_exists('servicos.json')) {
        // codigo
        $jsonServicos = file_get_contents($arquivoServicos);
        $arrayServicos = json_decode($jsonServicos, TRUE);
        $infoServico = $_POST; // pega informação do forumlario de cadastro
        // Verificar pq nao esta funcionamento
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos['servicos'][] = $infoServico; // adiciona o novo serviço na lista
        $jsonServicos = json_encode($arrayServicos, TRUE); //converte o array para json
        file_put_contents($arquivoServicos, $jsonServicos); // adiiona info no arquivo
    } else {
        $arquivo = fopen($arquivoServicos, 'w'); //abre ou criar o arquivo
        $arrayServicos = ["servicos" => []]; //cria array para guardar servicos
        $infoServico = $_POST; // pega informação do forumlario de cadastro
        $infoServico['imagem'] = $imagemServico;
        $arrayServicos['servicos'][] = $infoServico; // adiciona o novo serviço na lista
        $jsonServicos = json_encode($arrayServicos, TRUE); //converte o array para json
        file_put_contents($arquivoServicos, $jsonServicos); // adiiona info no arquivo

    }
}

function listarServicos() {
    //trazer informações do nosso "Banco de Dados" #sqn neste caso arquivo json
    //trazer servicos do json
    $arquivoJson = 'servicos.json';

    $servicos = [];

    if (file_exists($arquivoJson)) {
        $jsonServicos = file_get_contents($arquivoJson); // conteudo do arquivo
        $arrayServicos = json_decode($jsonServicos, TRUE); //json para array

        $servicos = $arrayServicos['servicos'];
    }

    return $servicos;
}

// echo "<pre>";
// var_dump(listarServicos());

if (isset($_POST['login'])) {
    $email = isset($_POST['email']) ? $_POST['email'] : '' ;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '' ;

    if($email == "" || $senha == "") {
        $erro = "Preencha os campos corretamente";
    } else {
        //acesso permitido
        unset($erro);
        $_SESSION['logado'] = true;
        if(isset($_POST['manter_logado'])){
            setcookie('email', $email, time()+3600, '/');
            setcookie('senha', $senha, time()+3600, '/');
        }
        header('Location: index.php');
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
}