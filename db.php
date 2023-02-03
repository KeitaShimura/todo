<?PHP
$dsn = 'mysql:dbname=todo;host=127.0.0.1;charset=utf8mb4';
$user = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $user, $password);

    // $sql = 'CREATE TABLE IF NOT EXISTS posts (
    //     id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //     content TEXT NOT NULL,
    //     created_at DATETIME,
    //     updated_at DATETIME
    //     )';

    //     $pdo->query($sql);
    } catch (PDOException $e) {
        exit($e->getMessage());
    }
?>