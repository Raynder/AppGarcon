<?php

    class Usuarios {

        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function register($dados = array()){
            $dados2 = array(
                ":N" => $dados["nome"],
                ":E" => $dados["email"],
                ":S" => password_hash($dados["senha"], PASSWORD_DEFAULT)
            );
            $query = "INSERT INTO cadastros(nome, email, senha) VALUES (:N, :E, :S)";
            if($this->emailexist($dados['email'])){
                if($this->db->query($query, $dados2)){
                    return true;
                }
            }
            return false;
        }

        public function login($dados = array()){
            $dados2 = array(
                ":E" => $dados["email"]
            );
            $query = "SELECT * FROM cadastros WHERE email = :E";
            $resul = $this->db->select($query, $dados2);
            if(isset($resul) && !empty($resul)){
                if(password_verify($dados["senha"], $resul["senha"])){
                    $this->newSession($resul);    
                    return true;
                }
                return false;
            }
            return false;
        }

        private function emailexist($email){
            $query = "SELECT email FROM cadastros WHERE email = :E";
            $dado = array(":E" => $email);
            $resul = $this->db->select($query, $dado);

            if(isset($resul) && empty($resul)){
                return true;
            }
            return false;
        }

        private function newSession($array = array()){
            $_SESSION["session_user"] = $array;
        }
    }