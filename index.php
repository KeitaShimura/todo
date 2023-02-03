<?PHP
$dsn = 'mysql:dbname=todo;host=127.0.0.1;charset=utf8mb4';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);

    $sql = 'CREATE TABLE IF NOT EXISTS posts (
        id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        content TEXT NOT NULL,
        created_at TIMESTAMP,
        updated_at TIMESTAMP
        )';
        
        $pdo->query($sql);
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>TODO一覧、登録画面</h1>
    <form method="post" action="index.php">
        <textarea name="TODO" cols="100" rows="5" placeholder="ここにTOTOを入力"></textarea>
    </form>
</body>
</html>