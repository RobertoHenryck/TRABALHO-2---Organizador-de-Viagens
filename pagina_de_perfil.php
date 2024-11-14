<?php

require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php";
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller/Controller.php";

$Controller = new Controller($pdo);




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <div class="login"> <?php


                        if (isset($_COOKIE['Usuario'])) {
                            echo "Bem vindo(a)! $_COOKIE[Usuario]!";
                        }
                        ?>

                        <a href="logout.php">Deslogar</a>



</body>

</html>