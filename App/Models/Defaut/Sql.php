<?php

    Class Sql{

        private $conn;

        public function __construct(){
            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
            date_default_timezone_set('America/Sao_Paulo');
            $meses = ['janeiro', 'fevereiro','marco', 'abriu','maio', 'junho','julho', 'agosto','setembro', 'outubro','novembro', 'dezembro'];
            $mes = strftime('%m');
            $ano = strftime('%Y');

            $valor = $mes - 1;

            global $site;
             
            $db = $site['conexao']['db'];
            $host = $site['conexao']['host'];
            $user = $site['conexao']['user'];
            $pass = $site['conexao']['pass'];

            $this->conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
        }

        public function query($query){
            $sql = $this->conn->prepare($query);
            $sql->execute();
        }

        public function insere($query, $array = array()){
            $sql = $this->conn->prepare($query);
            $this->setParams($array, $sql);
            $sql->execute();
        }

        public function select($query, $array = array()){
            $sql = $this->conn->prepare($query);
            $this->setParams($array, $sql);
            $sql->execute();
            $res = $sql->fetchALL(PDO::FETCH_ASSOC);
            return $res;
        }

        public function setParams($array = array(), $sql){

            foreach($array as $key => $value){
                $this->setParam($key, $value, $sql);
            }
        }

        public function setParam($key, $value, $sql){
            $sql->bindParam($key, $value);
        }
    }