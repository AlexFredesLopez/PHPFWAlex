<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Index extends Controller {
 
  
  public function __construct() {
    ;
  }
  
  public function index(){
    
    $datos = array(
        "titulo" => "Bienvenido al MVC"
    );
    
    $this->view('inicio', $datos);
  }
}