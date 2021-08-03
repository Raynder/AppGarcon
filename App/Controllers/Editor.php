<?php

 class Editor extends Controller {

    //  public function index(){
    //      $dados = [
    //         'titulo' => 'Home Page',
    //         'descricao' => 'Learn Of MVC'
    //      ];
    //      $this->view('paginas/home', $dados);
    //  }

      public function fundo() {
         $this->view('editor/fundo'); 
      }

      public function index() {
         $this->view('editor/imagem'); 
      }
      
      public function upload() {
         $this->view('editor/uploadImage'); 
      }

      public function imagem() {
         $this->view('editor/imagem'); 
      }

     public function header() {
         $dados = [
            'titulo' => 'About',
            'descricao' => 'More of, how learn MVC with PHP'
         ];
         $this->view('paginas/header', $dados);
         
     }
     
 }