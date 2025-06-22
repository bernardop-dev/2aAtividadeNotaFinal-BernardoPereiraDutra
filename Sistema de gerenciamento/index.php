<?php
include 'database.php';
$tarefas = $db->query("SELECT * FROM tarefas")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Minhas Tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>

    <form action="add_tarefa.php" method="post">
        <input type="text" name="descricao" placeholder="Digite a tarefa" required>
        <button type="submit">Adicionar</button>
    </form>

    <ul>
    <?php foreach ($tarefas as $t): ?>
        <li>
            <?php echo $t['feita'] ? '<strike>'.$t['descricao'].'</strike>' : $t['descricao']; ?>
            <?php if (!$t['feita']): ?>
                <a href="concluir.php?id=<?php echo $t['id']; ?>">[Feito]</a>
            <?php endif; ?>
            <a href="apagar.php?id=<?php echo $t['id']; ?>">[Apagar]</a>
        </li>
    <?php endforeach; ?>
    </ul>
</body>
</html>