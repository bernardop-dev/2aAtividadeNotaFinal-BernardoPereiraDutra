<?php
include 'database.php';

$id = $_GET['id'];

if ($id) {
    $db->prepare("DELETE FROM tarefas WHERE id = ?")->execute([$id]);
}

header("Location: index.php");