<?php

//configurações básicas


$host = 'localhost';
$dbname = 'organizador de viagens';
$username = 'root';
$password = '';

//conexão  PDO

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username , $password );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    die("ERRO AO CONECTAR:" . $e->getMessage());
}
?>
