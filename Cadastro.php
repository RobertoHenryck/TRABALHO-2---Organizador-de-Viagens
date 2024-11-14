<?php
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\config.php';
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\Controller\Controller.php';


$Controller = new Controller($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  $nome = $_POST['nome'];
  $data_hora = $_POST['email'];
  $local = $_POST['senha'];
  $roteiro = $_POST['sexo'];

  $cadastro = $Controller->cadastropessoa(nome: $nome, email: $email, senha: $senha, sexo: $sexo);

  if ($restultado) {
    header('../../index.php');
  } else {

    echo 'Erro ao cadastrar';
  }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>
    <form method="POST" action="">
        <p><input placeholder="Nome" type="text" name="nome"></p>
        <p><input name='email' placeholder="E-mail" type="text"></p>
        <p><input placeholder="Senha" name="senha" type="text"></p>
        <p><input type="text"name="sexo"></p>
        <p><a href="">Esqueceu sua senha?</a></p>
        <p><input  value="Cadastrar" type="button"></p>

    </form>
    
    
</body>
</html>