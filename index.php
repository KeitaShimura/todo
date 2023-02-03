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
    <title>TODO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="fs-1" style="margin: 50px 0 0 40px;">TODO一覧、登録画面</h1>
    <div style="text-align: center;">
        <form method="post" action="add.php">
            <h2 class="fs-2" style="text-align: left; margin: 50px 0 0 100px;">TODOアプリ</h2>
            <div class="form" style="text-align: center;">
                <textarea name="content"  rows="4" placeholder="ここにTOTOを入力" style="width:650px"></textarea>
                <div class="button" style="margin-top: 5px;">
                    <button type="submit" class="btn btn-primary">作成</button>
                </div>
            </div>
        </form>
        <article>
            <?php if ($posts->rowCount() === 0) { ?>
                <h3 class="fs-3" style="text-align: center; margin: 50px 0 0 0;">TODOはありません</h3>
            <?php } else { ?>
                <table class="table" style="margin:30px auto; text-align: center; border-top: 1px solid lightgray; width:650px;" >
                    <thead style="height: 50px;">
                        <tr>
                            <th class="col-3" style="font-weight: bold;">メモの内容</th>
                            <th class="col-3" style="font-weight: bold;">編集</th>
                            <th class="col-3" style="font-weight: bold;">削除</th>
                        </tr>
                    </thead>
                    <?php while ($post = $posts->fetch()) : ?>
                        <tbody>
                            <tr>
                                <td class="col-3" style="text-align: left; line-height: 40px;"><?php print($post['content']); ?></td>
                                <td class="col-3"><a href="update_do.php?id=<?php print($post['id']); ?>" class="btn btn-primary">編集</a></td>
                                <td class="col-3"><a href="delete.php?id=<?php print($post['id']); ?>" class="btn btn-danger">削除</a></td>
                            </tr>
                        </tbody>
                    <?php endwhile; ?>
                </table>
            <?php } ?>
        </article>
    </div>
</body>
</html>