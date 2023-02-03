<?PHP
require "db.php";

if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];

    $posts = $pdo->prepare('SELECT * FROM posts WHERE id=?');
    $posts->execute(array($id));
    $post = $posts->fetch();

    $statement = $pdo->prepare('UPDATE posts SET content=? WHERE id=?');
    $statement->execute(array($_POST['content'], $_POST['id']));
    echo "登録完了";
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
    <h1>TODO編集画面</h1>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?php print($id); ?>">
        <textarea name="content" cols="50" rows="5" placeholder="ここにTOTOを入力">
            <?php print($post['content']); ?>
        </textarea>
        <a href="index.php">戻る</a>
        <button type="submit">更新</button>
    </form>
</body>
</html>