<?php
require_once 'C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php';
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller/Controller.php";

$Controller = new Controller($pdo);
$Viagens = $Controller->listarViagens();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Viagens</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Modak&family=Oswald:wght@200..700&display=swap');

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('#');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            background-color: #f3d5b5;
            flex-direction: column;

        }

        li {
            display: flex;
            justify-content: center;
        }

        table {
            margin: auto;
            border-collapse: collapse;
            width: 900px;
        }

        td,
        th {
            padding: 10px;
            text-align: center;
            border: 1px solid #001524;
            background-color: #e6ccb2;
            color: #001524;
            font-size: 18px;
            box-shadow: 5px 5px 5px #766153;
        }

        th {
            background-color: #766153;
            font-size: 20px;
        }

        h1 {

            margin-bottom: 100px;
            display: flex;
            justify-content: center;
            font-size: 50px;
            margin: 0 auto;
            top: 10%;
            left: 50%;
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

        .botoes {
            display: flex;
            gap: 20px;
            margin: 20px;

        }

        .login {
            display: flex;
            align-items: center;

        }
    </style>
</head>

<body>
    <div class="login"> <?php


                        if (isset($_COOKIE['Usuario'])) {
                            echo "Bem vindo(a)! $_COOKIE[Usuario]!";
                        }
                        ?>
    </div>

    <h1>Lista das suas Viagens</h1>

    <div>

        <?php if (isset($Viagens) && is_array($Viagens) && count($Viagens) > 0): ?>
            <table>
                <thead>
                    <tr>
                        <th>Id da viagem</th>
                        <th>Nome</th>
                        <th>Data e Hora</th>
                        <th>Local</th>
                        <th>Roteiro da Viagem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($Viagens as $Viagem): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($Viagem['id']); ?></td>
                            <td><?php echo htmlspecialchars($Viagem['nome']); ?></td>
                            <td><?php echo htmlspecialchars($Viagem['data_hora']); ?></td>
                            <td><?php echo htmlspecialchars($Viagem['local']); ?></td>
                            <td><?php echo htmlspecialchars($Viagem['roteiro']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="botoes">
                <a href="Organizador de Viagens/Cadastrar_Viagem.php">Cadastrar Sua Viagem</a>
                <br>
                <a href="Organizador de Viagens/deletar.php">Excluir Viagem</a>
                <br>
                <a href="pagina_de_perfil.php">Página de Perfil</a>
            </div>
        <?php else: ?>
            <p>Nenhuma viagem marcada</p>
        <?php endif; ?>
    </div>
</body>

</html>