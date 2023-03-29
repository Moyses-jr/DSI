<?php

    class Model {

        private $driver = "mysql";
        private $dbname = "exempledsi";
        private $host  = "localhost";
        private $user  = "root";
        private $password = null;

        private $conex;

        protected $table;

        public function __construct(){
            $this->conex = new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname}",$this->user,$this->password);

            $tbl = strtolower(get_class($this));
            $tbl = $tbl.'s';
            $this->table = $tbl;

            // echo $tbl; die();

        }

        public function getById($id) {
                $sql = $this->conex->prepare("SELECT * FROM {$this->table} WHERE id = ?");
                $sql -> bindParam(1, $id);
                $sql -> execute();
                return $sql->fetch(PDO::FETCH_ASSOC);
        }

        public function getAll(){
            $sql = $this->conex->query("SELECT * FROM {$this->table}");
            return $sql -> fetchAll(PDO::FETCH_ASSOC);
            

        }

        public function create($data) {
            $sql = "INSERT INTO {$this->table} SET ";

            echo $sql;

            foreach ($data as $key => $value) {
                $data_to_sql[] = "{$key} = :{$key}";
                var_dump($data_to_sql); 
            }

            $sql .= implode(', ', $data_to_sql);
            
            $insert = $this->conex->prepare($sql);
            
            foreach ($data as $key => $value) {
                $insert->bindValue(":{$key}", $value);
            }

            $insert->execute();

            return $insert->errorInfo();
        }
    }

?>