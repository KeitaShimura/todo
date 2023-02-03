<?PHP
require "db.php";

if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $statement = $pdo->prepare('DELETE FROM posts WHERE id=?');
    $statement->execute(array($id));
}
?>