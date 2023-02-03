<?PHP
require "db.php";

$statement = $pdo->prepare('INSERT INTO posts SET content=?, created_at=NOW()');
$statement->execute(array($_POST['content']));

header('Location: http://localhost/todo/');
?>