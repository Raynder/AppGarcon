<?php

 class Admin extends Controller {

     private $empresa;

     public function __construct(){
    }
    
     public function index(){
         $this->empresa = $this->model('Empresas');
         $array = array('cnpj' => $_SESSION['empresa']['cnpj']);
         $estabelecimento = $this->empresa->select($array);

         $dados = [
            'estabelecimento' => $estabelecimento,
         ];
         $this->view('admin/perfil', $dados);
     }
     
     public function teste(){
         $this->view('admin/perfil');
     }
     

 }