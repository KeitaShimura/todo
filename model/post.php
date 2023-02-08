<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

    class post{
        private $PDO;
        public function __construct()
        {
            $conn = new db();
            $this->PDO = $conn->connection();
        }

        public function insert($content){
            $statement = $this->PDO->prepare("INSERT INTO posts VALUES(null,:content, NOW(), NOW())");
            $statement->bindParam(":content",$content);
            return ($statement->execute()) ? $this->PDO->lastInsertId() : false ;
        }

        public function show($id){
            $statement = $this->PDO->prepare("SELECT * FROM posts where id = :id limit 1");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $statement->fetch() : false ;
        }

        public function index(){
            $statement = $this->PDO->prepare("SELECT * FROM posts");
            return ($statement->execute()) ? $statement->fetchAll() : false;
        }

        public function update($id,$content){
            $statement = $this->PDO->prepare("UPDATE posts SET content = :content, updated_at=NOW() WHERE id = :id");
            $statement->bindParam(":content",$content);
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? $id : false;
        }

        public function delete($id){
            $statement = $this->PDO->prepare("DELETE FROM posts WHERE id = :id");
            $statement->bindParam(":id",$id);
            return ($statement->execute()) ? true : false;
        }
    }

?>