<?php

//$_GET - Dados passados pela Url
// Limite de 2000 caracteres
// Dados ficam expostos e são facilmnete manipulaveis


//$_POST -Dasdos são passados pelo corpo da requisição
//Não há limete de caracteres
// Os dados não são facilmente modificados pelo usuario

//htmlspecialchars()  USAR EM TODA ENTRADA DE USUARIO

//$_SERVER


if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = htmlspecialchars(string: $_POST['nome']);
    echo $nome;
} else {
    echo 'não enviado';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #3C3C3C;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite login" required> <br>
        <input type="password" name="password" placeholder="Digite senha" required> <br>
        <input type="submit" value="Enviar">
    </form>
</body>