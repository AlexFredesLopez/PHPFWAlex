<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Productos extends Controller {
  
  var $productoModel;
  var $subcategoria;
  var $cart;
  public function __construct() {
    $this->cart = new Cart();
    $this->productoModel = $this->model("producto");
    
  }
  
  public function index($idSubcategoria){
    
    $this->subcategoria = $idSubcategoria;
    $productos = $this->productoModel->obtenerProductos($idSubcategoria);
    $datos = array(
        "titulo" => "Productos",
        "productos" => $productos         
    );
    
    $this->view("producto/index", $datos);
            
  }
  
  public function agregar($subcategoria){
    $productos = $this->productoModel->obtenerProductos($subcategoria);
    $this->cart->insert($_POST);
    $datos = array(
        "titulo" => "Productos",
        "productos" => $productos         
    );
   
    redireccionar("productos/".$subcategoria);
  }
}