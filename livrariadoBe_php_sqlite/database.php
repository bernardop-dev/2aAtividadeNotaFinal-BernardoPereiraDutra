<?php
$db = new PDO('sqlite:livros.db');
$db->exec("CREATE TABLE IF NOT EXISTS livros (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo TEXT,
    autor TEXT,
    ano INTEGER
)");
?>
