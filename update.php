<?php
require "db.php";

$statement = $pdo->prepare('UPDATE posts SET content=?, updated_at=NOW() WHERE id=?');
$statement->execute(array($_POST['content'], $_POST['id']));

header('Location: http://localhost/todo/');
?>