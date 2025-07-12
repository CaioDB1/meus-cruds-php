<?php

include_once 'conexao.php';

$descricao = $_POST['descricao'];
$id = $_POST['id'];

$sql = 'UPDATE tarefas_simples SET descricao = ? WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$descricao, $id]);

header('Location: tarefas.php');
exit();
