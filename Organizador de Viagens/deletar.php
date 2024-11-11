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


    $result = $Controller->deletarViagem($nome,$data_hora,$local,$roteiro, $id);
    if ($result) {
        $message = "Viagem deletada com sucesso!";
    } else {
        $message = "Falha ao deletar a Viagem.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Viagem</title>
</head>

<body>
    <div class="container">
        <h2>Deletar Viagem</h2>
        <?php if (!empty($message)): ?>
            <p><?php echo htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <form method="POST">
            <select name="id">
                <?php foreach ($Viagens as $Viagem): ?>
                    <option value="<?= $Viagem['id']; ?>"><?= "$Viagem[id] - $Viagem[nome]"; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Deletar Pergunta">
        </form>
    </div>
    <br><a href="../../index.php">Voltar ao Menu Principal</a>
</body>

</html>