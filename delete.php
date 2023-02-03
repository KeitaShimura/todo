<?PHP
require "db.php";

if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $posts = $pdo->prepare('DELETE FROM posts WHERE id=?');
    $posts->execute(array($id));

    header('Location: http://localhost/todo/');
}
?>