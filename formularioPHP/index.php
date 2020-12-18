<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário PHP com Sessões e Condicionais</title>
</head>

<body>
    <h3>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</h3>

    <!-- Método post recebe os dados e envia para o corpo da página -->
    <form action="back-end/validacaoDados.php" method="post">
        <?php include('back-end/switchsErros.php'); ?>
        <p>Nome: <input type="text" name="nome" required></p>
        <p>Idade: <input type="number" max="200" name="idade" required></p>
        <p><input type="submit" value="Enviar"></p>
    </form>

    <!-- Método get recebe os dados e envia para o header da página -->
    <!-- <form action="script.php" method="get">
        <p>Seu nome: <input type="text" name="nome"></p>
        <p>Sua idade: <input type="text" name="idade"></p>
        <p><input type="submit"></p>
    </form> -->
</body>

</html>