<?php

require_once 'conexao.php';

$descricao = $_POST['descricao'];

$sql = 'INSERT INTO tarefas_simples (descricao) VALUES (?)';
$stmt = $pdo->prepare($sql);
$stmt->execute([$descricao]);

header('Location: tarefas.php');
exit();