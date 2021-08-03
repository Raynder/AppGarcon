<?php

 class Paginas extends Controller {

     public function index(){
         $dados = [
            'titulo' => 'Home Page',
            'descricao' => 'Learn Of MVC'
         ];
         $this->view('paginas/home', $dados);
     }

     public function background() {
        $this->view('paginas/background'); 
     }

     public function header() {
         $dados = [
            'titulo' => 'About',
            'descricao' => 'More of, how learn MVC with PHP'
         ];
         $this->view('paginas/header', $dados);
         
     }
     
 }