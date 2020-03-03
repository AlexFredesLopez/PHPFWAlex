<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Categoria {
  
  private $db;
  public function __construct() {
    $this->db = new DB();
  }
  
  public function obtenerCategorias(){
    $this->db->query("SELECT * FROM categoria");
    $resultados =  $this->db->registers();
    return $resultados;
  }
}