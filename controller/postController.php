<?php

class postController
{
    private $model;
    public function __construct()
    {
        $this->model = new post();
    }

    public function insert($content)
    {
        $content = htmlspecialchars($_POST['content'], ENT_QUOTES);

        $this->model->insert($content);
        $_SESSION['status'] = "TODOを作成しました。";
        return header("Location: ../index.php");
    }

    public function show($id)
    {
        return $this->model->show($id);
    }

    public function index()
    {
        return $this->model->index();
    }

    public function update($id)
    {
        $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
        $_SESSION['status'] = "TODOを更新しました。";
        $this->model->update($id, $content);
        return header("Location: ../index.php");
    }

    public function delete($id)
    {
        $_SESSION['status'] = "TODOを削除しました。";
        $this->model->delete($id);
        return header("Location: ../index.php");
    }
}
