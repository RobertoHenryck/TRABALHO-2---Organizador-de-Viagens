<?php
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php";
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller/Controller.php";

$Controller = new Controller($pdo);

$Viagens = $Controller->listarViagens();

if (isset($_POST['update_nome']) && isset($_POST['update_data_hora']) && isset($_POST['update_local']) && isset($_POST['update_roteiro']) && isset($_POST['id'])) {
    $Controller->editarViagens($_POST['update_nome'], $_POST['update_data_hora'], $_POST['update_local'], $_POST['update_roteiro'], $_POST['id']);

    header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Viagem</title>
</head>
<style>
    body {
        background-color: #f3d5b5;
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

    .conteudo {
        background-color: #b08968;
        width: 300px;
        height: 320px;
        margin: 0 auto;
        margin-top: 90px;
        border-radius: 10px;
        box-shadow: 5px 5px 5px #766153;
        padding-top: 30px;
    }

    input {
        margin-top: 30px;
        padding: 5px;
        margin: 10px;

    }

    h1 {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    label {
        color: black;
        font-size: large;
        
    }

    a {
        text-decoration: none;
        color: black;
        gap: 10px;
        display: flex;
        justify-content: center;
        padding: 10px;
    }
</style>


<body>
    <center>
        <form action="#" method="POST">
            <label for="id"></label>
            <H1>Editar Viagem</H1>
            <div class="conteudo">

                <label for="">Seleciona a Viagem</label>
                <br>
                <select name="id">


                    <?php foreach ($Viagens as $Viagem): ?>
                        <option value="<?= $Viagem['id']; ?>"><?= "$Viagem[id] - $Viagem[nome]"; ?></option>
                    <?php endforeach; ?>

                </select>

                <br>
                <input type="text" name="update_nome" placeholder="Nome da pessoa">
                <br>
                <input type="datetime-local" name="update_data_hora">
                <br>
                <input type="text" name="update_local" placeholder="Local">
                <br>
                <input type="text" name="update_roteiro" placeholder="Roteiro">
                <br>
                <button type="submit">Editar</button>
                <br>
                <a href="../index.php">Voltar</a>
            </div>
        </form>

    </center>
</body>

</html>