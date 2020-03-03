<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Subcategoria {
  
  
  private $db;
  public function __construct() {
    $this->db = new DB();
  }
  
  public function obtenerSubCategorias($id){
    $this->db->query("SELECT * FROM subcategoria WHERE categoria_id = :id");
    $this->db->bind(":id", $id);
    $resultados =  $this->db->registers();
    return $resultados;
  }
}