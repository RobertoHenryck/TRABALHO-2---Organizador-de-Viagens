<?php

require_once "C:\aluno2\xampp\htdocs\evolucao\stefany\TRABALHO-2---Organizador-de-Viagens\config.php";
require_once "C:\aluno2\xampp\htdocs\evolucao\stefany\TRABALHO-2---Organizador-de-Viagens\Controller\Controller.php";

$Controller = new Controller($pdo);




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Perfil</title>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f3d5b5;
        flex-direction: column;

    }

    a {

        display: flex;
        justify-content: center;
        padding: 10px;
        text-decoration: none;
        color: #001524;
        background-color: #a98467;
        width: 200px;
        margin: 0 auto;
        border-radius: 10px;
        transition: font-size 0.6s ease;
        box-shadow: 5px 5px 5px #766153;
        font-size: large;

    }

    a:hover {
        color: #ddb892;
        text-decoration: none;
        transform: scale(1.2);
        font-size: 18px;
    }
    .conteudo{
        display: flex;
        align-items: center;
        flex-direction: column;
        gap: 10px;
    }

</style>


<body>

    <div class="login">
        <div class="conteudo"> <?php


             if (isset($_COOKIE['Usuario'])) {
            echo '<div class="conteudo">'. "Bem vindo(a)! $_COOKIE[Usuario]!" . '</div>';
                  }
                  ?>

            <a href="logout.php">Deslogar</a>
        </div>



</body>

</html>