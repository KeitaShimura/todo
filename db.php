<?PHP

class Db
{
    function dbConnect()
    {
        $dsn = 'mysql:dbname=todo;host=127.0.0.1;charset=utf8mb4';
        $user = 'root';
        $password = '';

        try {
            $dbh = new \PDO($dsn, $user, $password, [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            ]);
        } catch (PDOException $e) {
            exit($e->getMessage());
            exit();
        }

        return $dbh;
    }
    
    function getPosts() {
        $dbh = $this->dbConnect();

        $sql = 'SELECT * FROM posts ORDER BY id DESC';
        $stmt = $dbh->query($sql);
        $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
        $dbh = null;
    }
}
