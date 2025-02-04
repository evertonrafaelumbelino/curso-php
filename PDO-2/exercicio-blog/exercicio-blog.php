<?php
    declare(strict_types=1);

    class Blog {
        private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $database = 'blog';
        private $conexao;

        public function __construct()
        {
            try {
                $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->database", $this->user, $this->pass);
            } catch (Exception $e) {
                echo $e->getMessage();
                die();
            }
        }

        public function list() {
            $sql = "select * from posts";

            $posts = [];

            foreach ($this->conexao->query($sql) as $key => $value) {
                array_push($posts, $value);
            }

            return $posts;
        }

        public function insert() {
            $sql = 'insert into posts(txtblog) values(?)';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $txtblog);
            $prepare->execute();

            return $prepare->rowCount();
        }

        public function update(string $txtblog, int $id): int {
            $sql = 'update posts set txtblog = ? where id = ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $txtblog);
            $prepare->bindParam(2, $id);

            $prepare->execute();

            return $prepare->rowCount();
        }

        public function delete(int $id): int {
            $sql = 'delete from posts where id = ?';

            $prepare = $this->conexao->prepare($sql);

            $prepare->bindParam(1, $id);
            $prepare->execute();

            return $prepare->rowCount();
        }
    }
?>