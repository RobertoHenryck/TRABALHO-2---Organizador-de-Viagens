<?php
  require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\config.php';
  // require_once '../../Controller/atividade15Controller.php';
  require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\Controller\Controller.php';


  $Controller = new Controller($pdo);

  if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nome = $_POST['nome'];
    $data_hora = $_POST['data_hora'];
    $local = $_POST['local'];
    $roteiro = $_POST['roteiro'];

    $restultado = $Controller->cadastrarviagem(nome: $nome, data_hora: $data_hora, local: $local, roteiro: $roteiro);

    if ($restultado) {
      header('../../index.php');

     
    } else {

      echo 'Erro ao cadastrar';
    }
  }

  ?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar Viagem</title>
</head>

<style>
    .roteiro{
        width:300px;
        height:200px;
        margin:0 auto;
    }
    a{
        text-decoration:none;
        color:black;
    }
</style>

<body>
  <center>

    <h1>Cadastrar Viagem </h1>

    <form method="POST" action="#">
      <label for="name">Nome</label>
      <br>
      <input type="text" name="nome" required />
      <br>
      <label for="data_hora">Data e Hora</label>
      <br>
      <input type="datetime-local"name="data_hora" required />
      <br>
      <label for="hora">local da viagem</label>
      <br>
      <input type="text" name="local" required />
      <br>
      <label for="roteiro">Roteiro da VIagem</label>
      <br>
      <input class="roteiro" type="text" name="roteiro" required>
      <br>
      <br>
      
      <button type="submit">Cadastrar viagem</button>

    </form>

    <br>

    <a href="../../index.php">Voltar</a>
  </center>
  
</body>

</html>
