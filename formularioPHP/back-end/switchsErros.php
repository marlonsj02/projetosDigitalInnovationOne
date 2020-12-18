<?php

//Switch case simples que informa um tipo de erro de acordo com a decisão da validação de dados.
$nomePequeno = isset($_SESSION['nomePequeno']) ? $_SESSION['nomePequeno'] : '';
if (!empty($nomePequeno)) {
echo $nomePequeno;
unset( $_SESSION['nomePequeno']);
}

$nomeExtenso = isset($_SESSION['nomeExtenso']) ? $_SESSION['nomeExtenso'] : '';
if (!empty($nomeExtenso)) {
echo $nomeExtenso;
unset( $_SESSION['nomeExtenso']);
}

$nomeVazio = isset($_SESSION['nomeVazio']) ? $_SESSION['nomeVazio'] : '';
if (!empty($nomeVazio)) {
echo $nomeVazio;
unset( $_SESSION['nomeVazio']);
}

$enviado = isset($_SESSION['enviado']) ? $_SESSION['enviado'] : '';
if (!empty($enviado)) {
echo $enviado;
unset( $_SESSION['enviado']);
}

$idadeExtensa = isset($_SESSION['idadeExtensa']) ? $_SESSION['idadeExtensa'] : '';
if (!empty($idadeExtensa)) {
echo $idadeExtensa;
unset( $_SESSION['idadeExtensa']);
}
