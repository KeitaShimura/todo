<?PHP
require "db.php";

$posts = $pdo->prepare('INSERT INTO posts SET content=?, created_at=NOW()');
$posts->execute(array($_POST['content']));

header('Location: http://localhost/todo/');
?>