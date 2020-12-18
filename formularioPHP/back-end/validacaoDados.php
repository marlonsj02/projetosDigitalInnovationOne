<?php

session_start();

// Utilizando o método $_GET os dados são recebidos e impressos no header da página
// $nome = $_GET['nome'];
// $idade = $_GET['idade'];
// var_dump($nome);
// var_dump($idade);

// Utilizando o método $_POST os dados são recebidos e enviados para o corpo da página, não sendo visualizado no header da página
$nome = $_POST['nome'];
$idade = $_POST['idade'];

//Estruturas de decisões para validação de dados digitados no form
if (strlen($nome) < 3) {
    $_SESSION['nomePequeno'] = "ERRO: Campo nome necessita de mais de três caracteres, por favor preencha-o corretamente.";
    header('location: ../index.php');
    return;
} elseif (strlen($nome) > 50) {
    $_SESSION['nomeExtenso'] = 'ERRO: Campo nome muito extenso, por favor preencha-o novamente, se necessário abrevie.';
    header('location: ../index.php');
    return;
} elseif (empty($nome)) {
    $_SESSION['nomeVazio'] = 'ERRO: Campo nome não pode ser vazio, refaça o formulário por favor.';
    header('location: ../index.php');
    return;
} elseif ($idade > 200) {
    $_SESSION['idadeExtensa'] = 'ERRO: Campo idade não pode possuir mais de dois caracteres, por favor preencha-o corretamente.';
    header('location: ../index.php');
    return;
} else {
    $_SESSION['enviado'] = 'Dados enviados com Sucesso.';
    header('location: ../index.php');
    return;
}

// O comando var_dump exibi na tela os dados recebidos com o método $_POST ou $_GET
//var_dump($nome);
//var_dump($idade);
