<?php

require_once 'C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/config.php';
require_once "C:/aluno2/xampp/htdocs/TRABALHO-2---Organizador-de-Viagens/Controller\Controller.php";


$Controller = new Controller($pdo);


$Viagens =$Controller ->listarViagens();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Viagens</title>
</head>
<body>

<a href="xampp/htdocs/atividaderefor/View/15/cadastrar.php";></a>

<div>


<li>LISTA DE VIAGENS MARCADAS</li>
 
<?php if(isset($Viagens) && is_array($Viagens) && count($Viagens) > 0): ?>
<table>
    <th>
        <th>nome</th>
        <th>data e hora</th>
        <th>local</h>
        <th>roteiro</h>
    </th>
    <tbody>
        <?php foreach($Viagens as $Viagem): ?>
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

<?php  else: ?>
    <p>Nenhuma viagem marcada</p>
<?php  endif  ?>
</div>

</body>
</html>