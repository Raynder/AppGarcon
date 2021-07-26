<?php

 class Paginas extends Controller {

     public function index(){
         $dados = [
            'titulo' => 'Home Page',
            'descricao' => 'Learn Of MVC'
         ];
         $this->view('paginas/home', $dados);
     }

     public function sobre() {
         $dados = [
            'titulo' => 'About',
            'descricao' => 'More of, how learn MVC with PHP'
         ];
         $this->view('paginas/sobre', $dados);
         
     }

     public function header() {
         $dados = [
            'titulo' => 'About',
            'descricao' => 'More of, how learn MVC with PHP'
         ];
         $this->view('paginas/header', $dados);
         
     }
     
 }