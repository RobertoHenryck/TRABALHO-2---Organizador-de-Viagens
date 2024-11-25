<?php
require_once __DIR__.'\config.php';
require_once __DIR__.'\Controller\Controller.php';


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
    display: flex;
    align-items: center;
    background-color: #c3a995;
    border: none;
    border-radius: 30px;
    padding: 5px;
    font-size: large;
    align-items: center;
    margin: 0 auto;
    color: #001524;
    padding: 10px;
    box-shadow: 5px 5px 5px #766153;
  }

  .container {
    display: flex;
    justify-content: center;
    background-color: #b08968;
    width: 350px;
    height: 370px;
    border-radius: 10px;
    margin: 0 auto;
    box-shadow: 5px 5px 5px #766153;
  }

  label {
    color: #001524;
    font-size: larger;
  }
  form{
  padding:5px;
  }
</style>

<body>
  <center>
    <h1>Cadastrar Viagem </h1>

    <div class="container">


      <form method="POST" action="#">

        <label for="name">Nome</label>

        <br>
        <input type="text" name="nome" required />
        <br>
        <label for="data_hora">Data e Hora</label>
        <br>
        <input type="datetime-local" name="data_hora" required />
        <br>
        <label for="hora">Local da viagem</label>
        <br>
        <input type="text" name="local" required />
        <br>
        <label for="roteiro">Roteiro da Viagem</label>
        <br>
        <textarea class="roteiro" type="text" name="roteiro" required></textarea>
        <br>
        <br>

        <button type="submit">Cadastrar viagem</button>

      </form>

    </div>

    <br>

    <a href="../index.php">Voltar</a>
  </center>

</body>

</html>
