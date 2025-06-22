<?php
include 'database.php';

$id = $_GET['id'];

if ($id) {
    $db->prepare("UPDATE tarefas SET feita = 1 WHERE id = ?")->execute([$id]);
}

header("Location: index.php");