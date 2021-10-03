<?php

    class Database {

        private $user = 'epiz_29913172';
        private $pass = 'LS1fGaNPGezBPzS';
        private $host = "sql109.epizy.com";
        private $dbname = "epiz_29913172_easydb";

        private $sql;

        public function __construct (){
            try{
                $opcoes = [
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ];
                $this->sql = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->pass, $opcoes);
            }
            catch(PDOException $e) {
                print "Error!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function query($query, $array = array()){
            $stmt = $this->sql->prepare($query);
            $this->setParams($array, $stmt);
            $stmt->execute();
            return $stmt;
        }

        public function select($query, $array = array()) {
            $dados = $this->query($query, $array)->fetchAll(PDO::FETCH_ASSOC);
            if(count($dados) > 1){
                //Caso retorne mais de um objeto
                return $dados;
            }
            return $this->query($query, $array)->fetch(PDO::FETCH_ASSOC);
        }

        public function update($query, $array = array()){
            $this->query($query, $array);
        }

        private function setParams($array = array(), $stmt){
            echo("conexao<br>");
            foreach($array as $key => $value){
                $this->setParam($key, $value, $stmt);
            }
        }

        private function setParam($paramSql ,$param, $stmt){
            $stmt->bindParam($paramSql, $param);
        }

    }

    //$sql->query("INSERT INTO cadastros(nome, idade) VALUES (:N, :I)", $array);
    // $dados = $sql->select("SELECT * FROM cadastros WHERE nome = :I", $array2 );
    // print_r($dados);
    //$sql->update("UPDATE cadastros SET nome = :N, idade = :I WHERE id = :D", array(":N" => "reisla", ":I" => 23, ":D" => 3));
    //$sql->query("DELETE FROM cadastros WHERE id = :D", array(":D" => 1));