<?php
require 'database.php';
$livros = $db->query("SELECT * FROM livros")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Livros</title>
</head>
<body>
    <h2>Adicionar Livro</h2>
    <form method="post" action="add_book.php">
        <input type="text" name="titulo" placeholder="Título" required>
        <input type="text" name="autor" placeholder="Autor" required>
        <input type="number" name="ano" placeholder="Ano" required>
        <button type="submit">Salvar</button>
    </form>

    <h2>Lista de Livros</h2>
    <ul>
        <?php foreach ($livros as $livro): ?>
            <li>
                <?php echo $livro['titulo'] . " - " . $livro['autor'] . " (" . $livro['ano'] . ")"; ?>
                <a href="delete_book.php?id=<?php echo $livro['id']; ?>">Excluir</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>