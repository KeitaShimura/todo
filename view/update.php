<?php
        require "../config/db.php";
        require "../model/post.php";
        require "../controller/postController.php";
        $obj = new postController();
    $obj->update($_POST['id'],$_POST['content']);
    ?>