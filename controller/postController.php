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
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $content)
    {
        $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
        $_SESSION['status'] = "TODOを更新しました。";
        return ($this->model->update($id, $content) != false) ? header("Location: ../index.php") : header("Location:../index.php");
    }

    public function delete($id)
    {
        $_SESSION['status'] = "TODOを削除しました。";
        return ($this->model->delete($id)) ? header("Location: ../index.php") : header("Location: ../index.php");
    }
}
