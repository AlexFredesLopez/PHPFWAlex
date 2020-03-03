<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Producto {
  
  private $db;
  
  public function __construct() {
    $this->db = new DB();
  }
  
  public function obtenerProductos($idSubCategoria){
    $this->db->query("SELECT * FROM producto WHERE subcategoria_id = :idSubCategoria");
    $this->db->bind(":idSubCategoria", $idSubCategoria);
    $resultados =  $this->db->registers();
    return $resultados;
  }
  
  
}