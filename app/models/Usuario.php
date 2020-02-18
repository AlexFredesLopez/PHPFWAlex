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
  
  public function obtenerUsuario($id){
    $this->db->query("SELECT * FROM usuarios where usuario_id = :usuario_id");
    $this->db->bind(":usuario_id", $id);
    $resultados =  $this->db->register();
    return $resultados;
  }
  
  public function agregarUsuario($datos){
    $this->db->query("INSERT INTO usuarios (nombre, email, telefono) VALUES (:nombre, :email, :telefono)");
    
    
    $this->db->bind(':nombre', $datos['nombre']);
    $this->db->bind(':email', $datos['email']);
    $this->db->bind(':telefono', $datos['telefono']);
    
    
    if($this->db->execute()){
      return true;
    }else{
      return false;
    }
  }
  
  public function actualizarUsuario($datos){
    $this->db->query("UPDATE usuarios SET nombre = :nombre, email = :email, telefono = :telefono WHERE usuario_id = :usuario_id");
    $this->db->bind(':usuario_id', $datos['usuario_id']);
    $this->db->bind(':nombre', $datos['nombre']);
    $this->db->bind(':email', $datos['email']);
    $this->db->bind(':telefono', $datos['telefono']);
    
    if($this->db->execute()){
      return true;
    }else{
      return false;
    }
  }
  
  
  public function eliminarUsuario($datos){
    $this->db->query("DELETE FROM usuarios where usuario_id = :usuario_id");
    $this->db->bind(':usuario_id', $datos['usuario_id']);
    if($this->db->execute()){
      return true;
    }else{
      return false;
    }
  }
}