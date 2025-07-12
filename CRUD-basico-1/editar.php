<?php

require_once 'conexao.php';

$id = $_GET['id'];

$sql = 'SELECT * FROM tarefas_simples WHERE id = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$tarefa = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <form method="post" action="atualizar.php">
            <div>
                <label>Tarefa:</label>
                <input class="form-control" name="descricao" type="text" value="<?php
                    echo htmlspecialchars($tarefa['descricao']);
                ?>">
                <input type="hidden" name="id" value="<?php echo $tarefa['id'] ?>">
            </div>
            <div class="mt-3">
                <button class="btn btn-success">Salvar alterações</button>
            </div>
        </form>
    </div>    
</body>
</html>
