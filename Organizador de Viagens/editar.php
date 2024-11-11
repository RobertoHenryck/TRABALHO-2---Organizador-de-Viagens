<?php
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php";
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller/Controller.php";

$Controller = new Controller($pdo);

$Viagens = $Controller->listarViagens();

if(isset($_POST['update_nome']) && isset($_POST['update_data_hora']) && isset($_POST['update_local']) && isset($_POST['update_roteiro']) && isset($_POST['id'])){
    $Controller->editarViagens($_POST['update_nome'],$_POST['update_data_hora'],$_POST['update_local'], $_POST['update_roteiro'],$_POST['id']);  

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

<body>
    <center>
    <form action="#" method="POST">
        <label for="id">id</label>
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
    </form>

    </center>
</body>

</html>