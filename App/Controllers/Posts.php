<?php

    class Posts extends Controller{
        
        public function __construct(){
            if(!isset($_SESSION["session_user"])){
                Url::redirect("usuario/entrar");
            }
        }

        public function index(){
            $this->view("posts/index");
        }
    }