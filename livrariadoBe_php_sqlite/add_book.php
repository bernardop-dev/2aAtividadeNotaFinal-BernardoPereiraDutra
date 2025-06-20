<?php
require 'database.php';

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$ano = $_POST['ano'];

$db->prepare("INSERT INTO livros (titulo, autor, ano) VALUES (?, ?, ?)")
   ->execute([$titulo, $autor, $ano]);

header('Location: index.php');