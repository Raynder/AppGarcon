<?php

    class Empresas {

        private $db;

        public function __construct(){
            $this->db = new Database();
        }

        public function cadastrar_empresa($dados = array()){
            $dados2 = array(
                ":N" => $dados["nome"],
                ":I" => $dados["hr_inicio"],
                ":F" => $dados["hr_fim"],
                ":C" => $dados["categoria"],
                ":D" => $dados["criado_em"]
            );
            $query = "INSERT INTO empresas(nome, hr_inicio, hr_fim, categoria, criado_em) VALUES (:N, :I, :F, :C, :D)";
            if($this->empresaexist($dados['nome'])){
                if($this->db->query($query, $dados2)){
                    return true;
                }
            }
            return false;
        }

        public function select($array = array(), $lista = []){
            return $this->db->selectAnd("empresas", $array, $lista);
        }

        // public function login($dados = array()){
        //     $dados2 = array(
        //         ":E" => $dados["email"]
        //     );
        //     $query = "SELECT * FROM cadastros WHERE email = :E";
        //     $resul = $this->db->select($query, $dados2);
        //     if(isset($resul) && !empty($resul)){
        //         if(password_verify($dados["senha"], $resul["senha"])){
        //             $this->newSession($resul);    
        //             return true;
        //         }
        //         return false;
        //     }
        //     return false;
        // }

        private function empresaexist($empresa){
            $query = "SELECT nome FROM empresas WHERE nome = :N";
            $dado = array(":N" => $empresa);
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