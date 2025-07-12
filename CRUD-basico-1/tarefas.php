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
        <form action="salvar.php" method="post">
            <label>Tarefa</label>
            <input class="form-control" name="descricao" type="text">
            <div class="mt-3">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>
        </form>
    </div>
    <div class="container mt-5">
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>Tarefa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require_once 'conexao.php';
                    $sql = 'SELECT * FROM tarefas_simples';
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

                    foreach($resultados as $tarefa){
                        $descricao = $tarefa['descricao'];

                        echo "
                            <tr>
                                <td>$descricao</td>
                                <td>
                                    <a href='excluir.php?id=" . $tarefa['id'] . "'>Excluir</a>
                                    <a href='editar.php?id=" . $tarefa['id'] . "'>Editar</a>
                                </td>
                            </tr>
                        ";
                    }

                ?>
            </tbody>
        </table>
    </div>    
</body>
</html>