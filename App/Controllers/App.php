<?php

 class App extends Controller {

     private $empresa;

     public function __construct(){
        $this->empresa = $this->model('Empresas');
     }

     public function index(){
         $empresas = $this->empresa->select();

         $dados = [
            'empresas' => $empresas,
            'descricao' => 'Learn Of MVC'
         ];
         $this->view('app/principal', $dados);
     }

     public function background() {
        $this->view('app/background'); 
     }

     public function header() {
         $dados = [
            'titulo' => 'About',
            'descricao' => 'More of, how learn MVC with PHP'
         ];
         $this->view('app/header', $dados);
         
     }
     
 }