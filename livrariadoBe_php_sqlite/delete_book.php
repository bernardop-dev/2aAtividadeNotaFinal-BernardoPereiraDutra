<?php
require 'database.php';

$id = $_GET['id'];

$db->prepare("DELETE FROM livros WHERE id = ?")
   ->execute([$id]);

header('Location: index.php');
?>
