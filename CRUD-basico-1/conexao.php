<?php

$host = 'localhost';
$user = 'root';
$db_name = 'meu_catalogo';
$password = '';

try{
    $pdo = new PDO("mysql:dbname=$db_name;host=$host",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e){
    die("Erro ao se conectar com o banco: " . $e->getMessage());
}