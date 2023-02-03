<?PHP
$dsn = 'mysql:dbname=todo;host=127.0.0.1;charset=utf8mb4';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);

} catch (PDOException $e) {
    exit($e->getMessage());
}

$statement = $pdo->prepare('INSERT INTO posts SET content=?, created_at=NOW()');
$statement->execute(array($_POST['content']));
echo "登録完了";
?>