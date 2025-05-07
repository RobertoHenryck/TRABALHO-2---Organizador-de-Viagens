<?php
require_once '';
require_once __DIR__.'\Controller\Controller.php';

$Controller = new Controller($pdo);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $sexo = $_POST['sexo'];

  $cadastro = $Controller->cadastropessoa(nome: $nome, email: $email, senha: $senha, sexo: $sexo);

  if ($cadastro) {
    header('index.php');
  } else {
    echo 'Erro ao cadastrar. Por favor, verifique os dados inseridos.'; 
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


    <div class="container">
      <h1>Cadastrar Conta</h1>

      <form method="POST">

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

    <a href="login.php">Voltar</a>

  </center>

</html>