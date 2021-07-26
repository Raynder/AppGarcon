<?php

    class Usuario extends Controller {

        private $usuarioModel;

        public function __construct(){
            $this->usuarioModel = $this->model('Usuarios');
        }

        public function cadastrar (){
            
            if(isset($_SESSION['session_user'])){
                Url::redirect();
            }

            $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form)){
                $dif = 0;
                $dados = array(
                    "nome" => $form["name"],
                    "email" => $form["email"],
                    "senha" => $form["pass"],
                    "confsenha" => $form["confirmPassword"]
                );
                if($dados["senha"] == $dados["confsenha"]){
                    if(Check::checkemail($dados['email'])){
                        foreach($dados as $key => $value){
                            if($value == ""){
                                $dados[$key."erro"] = "O campo $key não pode estar vazio!";
                                $erro = "erro";
                            }
                        }
                        //Cadastrar
                        if($erro != "erro"){
                            if(count($dados) == 4){
                                if($this->usuarioModel->register($dados)){
                                    echo("<script>alert('Cadastro realizado com sucesso!!')</script>");
                                    Url::redirect('usuario/entrar');
                                }
                                else{
                                    echo("<script>alert('Ja existe um usuario com este email cadastrado.')</script>");
                                }
                            }
                        }
                    }
                    else{
                        $dados['emailerro'] = "Email invalido";
                    }
                }
                else{
                    $dados["senhaerro"] = "As senhas não conferem!";
                    $dados["confsenhaerro"] = "As senhas não conferem!";
                }
            }
            $this->view("usuarios/cadastrar", $dados);
        }

        public function entrar (){
            
            if(isset($_SESSION['session_user'])){
                Url::redirect();
            }

            $form = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            if(isset($form)){
                $dif = 0;
                $dados = array(
                    "email" => $form["email"],
                    "senha" => $form["pass"]
                );
                if(Check::checkemail($dados['email'])){
                    foreach($dados as $key => $value){
                        if($value == ""){
                            $dados[$key."erro"] = "O campo $key não pode estar vazio!";
                            $erro = "erro";
                        }
                    }
                    //Cadastrar
                    if($erro != "erro"){
                        if(count($dados) == 2){
                            if($this->usuarioModel->login($dados)){
                                echo("<script>alert('Logado!')</script>");
                                Url::redirect();
                            }
                            else{
                                echo("<script>alert('Usuario ou senha invalidos.')</script>");
                            }
                        }
                    }
                }
                else{
                    $dados['emailerro'] = "Email invalido";
                }
            }

            $this->view("usuarios/entrar", $dados);
        }

        public function sair(){
            Controll::sair();
        }
    }