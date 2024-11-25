<?php
require_once __DIR__.'\config.php';
require_once __DIR__.'\Controller\Controller.php';

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

  .botoes {
    padding: 10px;
  }
</style>

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