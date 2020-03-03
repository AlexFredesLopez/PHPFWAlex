<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Productos extends Controller {
  
  var $productoModel;
  public function __construct() {
    
    $this->productoModel = $this->model("producto");
  }
  
  public function index($idSubcategoria){
    
    $productos = $this->productoModel->obtenerProductos($idSubcategoria);
    
    $datos = array(
        "titulo" => "Productos",
        "productos" => $productos         
    );
    
    $this->view("producto/index", $datos);
            
  }
}