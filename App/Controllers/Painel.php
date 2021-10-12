<?php

 class Painel extends Controller {

    private $empresa;

    public function __construct(){
        $this->empresa = $this->model('Empresas');
    }

     public function index(){
        $empresas = $this->empresa->select();

        $this->view('painel/inicio', ['empresas' => $empresas]);
     }

     public function excluir(){
         if(isset($_POST['id']) && !empty($_POST['id'])){
             $image = "img/logos/logo_".$_POST['nome'].".png";
             if(unlink($image)){
                 if($this->empresa->deleteEmpresa($_POST['id'])){
                    exit(json_encode('resp:Empresa deletada com sucesso!'));
                 }
                
                 else{
                    exit(json_encode('resp:Não foi possivel deletar esta empresa, favor comunicar a area responsavel!'));
                 }
             }
             else{
                exit(json_encode('resp:Não foi possivel deletar esta empresa!'));
             }
         }
     }

     public function cadastrar(){
        if(isset($_POST['nome']) && isset($_POST['hr_inicio']) && isset($_POST['hr_fim']) && isset($_POST['image'])){
            $imageTemp = explode(URL,$_POST['image'])[1];
            $image = "img/logos/logo_".$_POST['nome'].".png";

            //cadastrar empresa
            $dados = array(
                "nome" => $_POST['nome'],
                "hr_inicio" => $_POST['hr_inicio'],
                "hr_fim" => $_POST['hr_fim'],
                "categoria" => $_POST['categoria'],
                "criado_em" => date('Y-m-d H:i:d')
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