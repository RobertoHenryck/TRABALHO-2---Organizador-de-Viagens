<?php
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php";
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller/Controller.php";

$Controller = new Controller($pdo);

if (!empty($_POST)) {
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    $login = $Controller->logIn($nome, $senha);
    if (!empty($login)) {

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
<style>
    body {
        background-color: #f3d5b5;
    }

    input,
    textarea {
        background-color: #d5bdaf;
        border: none;
        border-radius: 10px;
        padding: 5px;
        margin: 0 1.5%;
    }

    .roteiro {
        width: 300px;
        height: 100px;
        margin: 0 auto;
    }

    a {
        text-decoration: none;
        color: black;
    }

    h1 {
        color: #7f4f24;

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

    button {
        align-items: center;
        background-color: #c3a995;
        border: none;
        border-radius: 10px;
        padding: 5px;
        font-size: large;
        align-items: center;
        margin: 0 auto;
        color: #001524;
        width: 200px;
        text-align: center;
        padding: 10px;
        box-shadow: 5px 5px 5px #766153;
    }

    .container {
        background-color: #b08968;
        width: 300px;
        height: 350px;
        margin: 0 auto;
        margin-top: 150px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px #766153;
    }
    h1 {
        display: flex;
        margin-top: 10px;
        margin: 0 auto;
        justify-content: center;
        padding: 10px;
    }

    label {
        color: #001524;
        font-size: larger;
    }

    form {
        padding: 5px;
    }
    .botoes{
     padding: 10px  ;
    }
</style>

<body>
    <center>

        <div class="container">
            <h1>
                Login
            </h1>
            <form method="POST">
                <br>
                <br>
                <label for="nome">Nome</label>
                <br>
                <input type="text" name="nome">
                <br>
                <label for="senha">Senha</label>
                <br>
                <input type="text" name="senha">
                <br>
                <br>
                <br>
                <button type="submit">Logar</button>
            </form>
            <center>
                <Div class="botoes">
                    <a href="Cadastro.php">Cadastrar-se</a>

                </Div>
        </div>
</body>

</html>