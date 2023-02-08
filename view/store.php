<?php
    require "../config/db.php";
    require "../model/post.php";
    require "../controller/postController.php";
    $obj = new postController();
    $obj->guardar($_POST['content']);

    echo $_POST['content'];
?> 