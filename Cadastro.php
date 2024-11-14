<?php
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\config.php';
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\Controller\Controller.php';

$Controller = new Controller($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Hash da senha
    $sexo = $_POST['sexo'];

    $cadastro = $Controller->cadastropessoa(nome: $nome, email: $email, senha: $senha, sexo: $sexo);

    if ($cadastro) {
        header('index.php');
    } else {
        echo 'Erro ao cadastrar. Por favor, verifique os dados inseridos.'; // Mensagem de erro mais informativa
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
</head>
<body>
  <center>
    <h1>Cadastrar Conta</h1>

    <div class="container">


      <form method="POST" >

        <label for="name">Nome</label>
        <br>
        <input type="text" name="nome" required />
        <br>

        <label for="email">E-mail</label>
        <br>
        <input type="email" name="email" required />
        <br>

        <label for="senha">Senha</label>
        <br>
        <input type="text" name="senha" required />
        <br>

        <label for="sexo">Sexo</label>
        <br>
        <input class="sexo" type="text" name="sexo" required>
        <br>

        <br>
        <button type="submit">Cadastrar</button> 
      </form>

    </div>

    <br>

    <a href="index.php">Voltar</a>

  </center>
</html>