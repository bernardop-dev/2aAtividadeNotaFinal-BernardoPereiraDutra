<?php
include 'database.php';

$desc = $_POST['descricao'];

if ($desc) {
    $db->prepare("INSERT INTO tarefas (descricao) VALUES (?)")->execute([$desc]);
}

header("Location: index.php");