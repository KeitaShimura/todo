<?PHP
require "db.php";

$posts = $pdo->query('SELECT * FROM posts ORDER BY id DESC');
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
    <form method="post" action="add.php">
        <textarea name="content" cols="50" rows="5" placeholder="ここにTOTOを入力"></textarea>
        <button type="submit">作成</button>
    </form>

    <article>
        <?php while ($post = $posts->fetch()): ?>
        <p><?php print($post['content']); ?></p>
        <p></p>
        <p>編集</p>
        <button type="submit">編集</button>
        <p>削除</p>
        <button type="submit">削除</button>
        <?php endwhile; ?>
    </article>
</body>
</html>