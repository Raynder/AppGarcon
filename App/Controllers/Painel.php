<?php

 class Painel extends Controller {

    private $empresa;

    public function __construct(){
        $this->empresa = $this->model('Empresas');
    }

     public function index(){
         $this->view('painel/inicio');
     }

     public function cadastrar(){
        if(isset($_POST['nome']) && isset($_POST['hr_inicio']) && isset($_POST['hr_fim']) && isset($_POST['image'])){
            $imageTemp = explode(URL,$_POST['image'])[1];
            $image = "img/logos/logo_".$_POST['nome'].".png";

            //cadastrar empresa
            $dados = array(
                "nome" => $_POST['nome'],
                "ht_inicio" => $_POST['ht_inicio'],
                "hr_fim" => $_POST['hr_fim'],
                "categoria" => $_POST['categoria']
            );
            if($this->empresa->cadastrar_empresa($dados)){
                if(rename($imageTemp, $image)){
                    exit(json_encode('resp:Empresa cadastrada com sucesso!'));
                }
                else{
                    exit(json_encode('resp:Empresa cadastrada sem a logo!'));
                }
            }
            else{
                exit(json_encode('resp:Não foi possivel cadastrar esta empresa!'));
            }
        }
        else{
            exit(json_encode('resp:Preencha todos os campos!'));
        }
     }
 
 }