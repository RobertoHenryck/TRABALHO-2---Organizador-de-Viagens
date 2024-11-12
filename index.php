<?php

require_once 'C:/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php';
require_once "C:/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller\Controller.php";


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
            background-image: url('imagem index.png');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 900px;
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

        td {
            padding: 10px;
            text-align: center;
            border: 1px solid #7f5539;
            background-color: #e6ccb2;
            color: #2f4550;
            font-size: 18px;
        }

        th {
            background-color: lightgray;
            border: 1px solid black;
            font-size: 20px;

        }

        /*utilizei chat gpt para fazer o H1 aparecer mais "suave"*/
        h1 {
            margin-bottom: 100px;
            display: flex;
            justify-content: center;
            font-size: 50px;
            position: absolute;
            top: 10%;
            left: 50%;
            transform: translateX(-50%);
            color: transparent;
            background: linear-gradient(45deg, black, black);
            -webkit-background-clip: text;
            background-clip: text;
            text-shadow: 4px 4px 15px rgba(0, 0, 0, 0.5);
            opacity: 0;
            animation: fadeInText 3s ease-out forwards, pulse 1.5s infinite alternate;
        }

        @keyframes fadeInText {
            0% {
                opacity: 0;
                transform: translateX(-50%) scale(0.8);
            }

            100% {
                opacity: 1;
                transform: translateX(-50%) scale(1);
            }
        }

        a {
            display: flex;
            justify-content: center;
            padding: 10px;
            text-decoration: none;
            color: #1d3557;
            background-color: black;
            width: 200px;
            margin: 0 auto;
            border-radius: 10px;
            transition: font-size 0.6s ease;

        }

        a:hover {
            color: red;
            text-decoration: none;
            transform: scale(1.2);
            font-size: 18px;
        }

        .botoes {
            margin: 10px;

        }
    </style>
</head>

<body>


    <h1>Lista das suas Viagens</h1>

    <div>

        <?php if (isset($Viagens) && is_array($Viagens) && count($Viagens) > 0): ?>
            <table>
                <th>
                <th>Nome</th>
                <th>Data e Hora</th>
                <th>Local</h>
                <th>Roteiro da Viagem</h>


                </th>
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
                <a href="Organizador de Viagens\Cadastrar_Viagem.php">Cadastrar Sua Viagem</a>
                <br>
                <a href="Organizador de Viagens\deletar.php">Excluir Viagem </a>
            </div>
        <?php else: ?>
            <p>Nenhuma viagem marcada</p>
        <?php endif  ?>
    </div>



</body>

</html>