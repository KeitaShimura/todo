<?php
require_once "../config/db.php";
require_once "../model/post.php";
require_once "../controller/postController.php";


$obj = new postController();
$obj->delete($_GET['id']);
