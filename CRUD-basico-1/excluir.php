<?php

require_once 'conexao.php';

$id = $_GET['id'];

$sql = 'DELETE FROM tarefas_simples WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

header('Location: tarefas.php');
exit();

