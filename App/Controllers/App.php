<?php

 class App extends Controller {

     public function index(){
         $dados = [
            'titulo' => 'Home Page',
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