<?php

    class Controller {

        public function model($model){
            require_once "../App/Models/".$model.".php";
            return new $model;
        }

        public function construc($table){
            require_once "../App/Construction/".$table.".php";
            return new $table;
        }

        public function view($view, $dados = []){
            $arquivo = ("../App/Views/".$view.".php");
            if(file_exists($arquivo)){
                require_once($arquivo);
            }
            else{
                die("Arquivo de view inexistente!");
            }
        }
    }