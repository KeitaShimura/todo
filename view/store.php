<?php
require "../config/db.php";
require "../model/post.php";
require "../controller/postController.php";

session_start();
$token = filter_input(INPUT_POST, 'token');
if (empty($_SESSION['token']) || $token !== $_SESSION['token']) {
    die('投稿失敗');
} else {

    $obj = new postController();
    $obj->insert($_POST['content']);

    echo $_POST['content'];
}
