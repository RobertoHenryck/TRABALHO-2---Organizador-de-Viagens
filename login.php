<?php
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php";
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller/Controller.php";

$Controller = new Controller($pdo);
 
if(!empty($_POST)){
    $nome = $_POST['nome'];
    $senha =$_POST['senha'];

    $login = $Controller->logIn($nome, $senha);
    if(!empty($login)){
        
        setcookie("Usuario", $nome);


        header("Location: index.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>

<body>
    <center>
        <h1>
            Login
        </h1>

        <form method="POST">
            <label for="nome">Nome</label>
            <br>
            <input type="text" name="nome">
            <br>
            <label for="senha">Senha</label>
            <br>
            <input type="text" name="senha">
            <br>
            <button type="submit">Logar</button>
        </form>
        <center>
</body>

</html>