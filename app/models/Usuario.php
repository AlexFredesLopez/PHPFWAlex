<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario {
  
  private $db;
  public function __construct() {
    $this->db = new DB();
  }
  
  public function obtenerUsuarios(){
    $this->db->query("SELECT * FROM usuarios");
    $resultados =  $this->db->registers();
    return $resultados;
  }
}