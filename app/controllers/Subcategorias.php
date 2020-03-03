<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Subcategorias extends Controller {
  
  
  var $subcategoriaModel;
  public function __construct() {
    /**
     * @var subcategoriaModel models/SubCategoria
     */
    $this->subcategoriaModel = $this->model("subcategoria");
  }
  
  public function index($id){
    
    $subCategoria = $this->subcategoriaModel->obtenerSubCategorias($id);
    
  
    $datos = array(
      "titulo" => "Subcategoria",
      "subcategorias" => $subCategoria
    );
    
    $this->view("subcategoria/index", $datos);
  }
}