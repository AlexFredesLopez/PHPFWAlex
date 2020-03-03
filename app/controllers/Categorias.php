<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Categorias extends Controller {
  
  public function __construct() {
    $this->categoriaModel = $this->model("categoria");
    $this->subcategoriaModel = $this->model("subcategoria");
  }
  
  public function index($id = null){
    
    if($id == null){
      $categorias = $this->categoriaModel->obtenerCategorias();
      $datos = array(
          "titulo" => "Categorías",
          "categorias" => $categorias
      );
      $this->view('categoria/indexCategoria', $datos);
      
    }else{
      $subcategoria = $this->subcategoriaModel->obtenerSubCategorias($id);
      $datos = array(
         "titulo" => "Categorías",
         "subcategoria" => $subcategoria
      ); 
      
      $this->view('subcategoria/index', $datos);
    }
     
  }
}