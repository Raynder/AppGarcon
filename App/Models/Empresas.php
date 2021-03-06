<?php

    class Empresas {

        private $db;
        private $table = "empresas";

        public function __construct(){
            $this->db = new Database();
        }

        public function cadastrar_empresa($dados = array()){
            $senha = $this->db->gerar_senha();

            $dados2 = array(
                ":N" => $dados["nome"],
                ":P" => $dados["cnpj"],
                ":S" => MD5($senha),
                ":I" => $dados["hr_inicio"],
                ":F" => $dados["hr_fim"],
                ":C" => $dados["categoria"],
                ":D" => $dados["criado_em"]
            );
            $query = "INSERT INTO $this->table(nome,cnpj,senha, hr_inicio, hr_fim, categoria, criado_em) VALUES (:N, :P, :S, :I, :F, :C, :D)";
            if($this->empresaexist($dados['nome'])){
                if($this->db->query($query, $dados2)){
                    return true;
                }
            }
            return false;
        }

        public function select($array = array(), $lista = []){
            return $this->db->selectAnd($this->table, $array, $lista);
        }

        public function deleteEmpresa($id){
            $query = "DELETE FROM $this->table WHERE id = ".$id;
            return $this->db->query($query);
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