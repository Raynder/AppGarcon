<?php

 class Painel extends Controller {

     public function index(){
         $this->view('painel/inicio');
     }

     public function cadastrar(){
        if(isset($_POST['nome']) && isset($_POST['hr_inicio']) && isset($_POST['hr_fim']) && isset($_POST['image'])){
            $imageTemp = explode(URL,$_POST['image'])[1];
            $image = "img/logos/logo_".$_POST['nome'].".png";
            if(rename($imageTemp, $image)){
                exit(json_encode('resp:Empresa cadastrada com sucesso!'));
            }
            else{
                exit(json_encode('resp:Erro ao cadastrar dados, não foi possivel concluir!'));
            }
        }
        else{
            exit(json_encode('resp:Preencha todos os campos!'));
        }
     }
 
 }