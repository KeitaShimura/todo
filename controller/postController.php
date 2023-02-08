<?php
    class postController{
        private $model;
        public function __construct()
        {
            $this->model = new post();
        }

        public function guardar($content){
            $content = htmlspecialchars($_POST['content'], ENT_QUOTES);

            $this->model->insert($content);
            return header("Location: ../index.php");
        }

        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
        }

        public function index(){
            return ($this->model->index()) ? $this->model->index() : false;
        }

        public function update($id, $content){
            $content = htmlspecialchars($_POST['content'], ENT_QUOTES);
            return ($this->model->update($id, $content) != false) ? header("Location: ../edit.php") : header("Location:../edit.php");
        }

        public function delete($id){
            return ($this->model->delete($id)) ? header("Location: ../index.php") : header("Location: ../index.php") ;
        }
    }

?>