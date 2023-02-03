<?php
require "db.php";

$posts = $pdo->prepare('UPDATE posts SET content=?, updated_at=NOW() WHERE id=?');
$posts->execute(array($_POST['content'], $_POST['id']));

header('Location: http://localhost/todo/');
?>