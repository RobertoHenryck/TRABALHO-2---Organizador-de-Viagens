<?php
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\config.php';
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\Model\Model.php';
require_once 'C:\aluno2\xampp\htdocs\TRABALHO-2---Organizador-de-Viagens\Controller\Controller.php';

$Model = new Model($pdo);
$Controller = new Model($pdo);
$Viagens = $Controller->listarViagens();

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];


    $result = $Controller->deletarViagem($id);
    if ($result) {
        $message = "Viagem deletada com sucesso!";
    } else {
        $message = "Falha ao deletar a Viagem.";
    }
    header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Viagem</title>
</head>

<style>
    body {
        background-color: #f3d5b5;
        align-items: center;
        margin: 0 auto;
        justify-content: center;
        margin-top: 200px;

    }

    .container {
        display: flex;
        text-align: center;
        margin: 0 auto;
        justify-content: center;
        padding: 10px;
        text-decoration: none;
        color: #001524;
        padding: 10px;
        width: 200px;
        margin: 0 auto;
        border-radius: 10px;

    }

    input {
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


    }

    select {
        width: 210px;
       height: 34px;
       overflow: hidden;
       background: url(nova_setinha.jpg) no-repeat right #c6ac8f;
       border: 1px solid #c6ac8f;

    }

    h1 {

        display: flex;
        justify-content: center;
        margin: 0 auto; 
        height: 50px;
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
        transition: font-size 0.9s ease;
        box-shadow: 5px 5px 5px #766153;
        font-size: large;
    }

    a:hover {
        color: #ddb892;
        text-decoration: none;
        transform: scale(1.2);
        font-size: 18px;
    }

    .ajuste_margin {
        padding: 0px 0px 20px 0px;
    }
    .conteudo{
        background-color: #e6ccb2;
        border-radius: 10px;
        width: 300px;
        height: 300px;
        margin: 0 auto;
        box-shadow: 5px 5px 5px #766153;
        
    }


</style>

<body>
    <div class="conteudo">
    <h1>Deletar Viagem</h1>

    <div class="container">

        <?php if (!empty($message)): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>

        <form method="POST">

            <div class="ajuste_margin">

                <select name="id">

                    <?php foreach ($Viagens as $Viagem): ?>

                        <option value="<?= $Viagem['id']; ?>"><?= "$Viagem[id] - $Viagem[nome]"; ?></option>

                    <?php endforeach; ?>
                </select>
            </div>
            <input type="submit" value="Deletar Viagem">

        </form>
    </div>
    <br>
    <a href="../index.php">Voltar á sua lista</a>
    <br>
    <a href="Cadastrar_Viagem.php">Cadastrar nova Viagem</a>
    <br>
    </div>
</body>

</html>