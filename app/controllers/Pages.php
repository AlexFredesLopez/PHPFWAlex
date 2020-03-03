<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Pages extends Controller {
  
  public function __construct() {

    $this->usuarioModelo = $this->model('Usuario');
  }
  
  
  public function index(){
    
    $usuario = $this->usuarioModelo->obtenerUsuarios();
    $datos = array(
        "titulo" => "Bienvenido al MVC",
        "usuarios" => $usuario
    );
    
    $this->view('inicio', $datos);
  }
  
  
  public function agregar(){
    
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      $datos = array(
          'nombre' => trim($_POST['nombre']),
          'email' => trim($_POST['email']),
          'telefono' => trim($_POST['telefono'])
      );
      
      if($this->usuarioModelo->agregarUsuario($datos)){
        redireccionar('pages');
      }else{
         die("Ups!! Algo Salió mal");
      }
    }else{
     $datos = array(
          'nombre' => '',
          'email' => '',
          'telefono' => ''
      );
     
     $this->view('agregar', $datos);
    }
    
  }
  
  
  public function editar($id){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $datos = array(
          'usuario_id' => trim($id),
          'nombre' => trim($_POST['nombre']),
          'email' => trim($_POST['email']),
          'telefono' => trim($_POST['telefono'])
      );
      
      if($this->usuarioModelo->actualizarUsuario($datos)){
        redireccionar('pages');
      }else{
         die("Ups!! Algo Salió mal");
      }
    }else{
      
      $usuario = $this->usuarioModelo->obtenerUsuario($id);
      
      $datos = array(
          'usuario_id' => $usuario->usuario_id,
          'nombre' => $usuario->nombre,
          'email' => $usuario->email,
          'telefono' => $usuario->telefono
      );
     
     $this->view('editar', $datos);
    }
  }
  
  
  public function borrar($id){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $datos = array(
          'usuario_id' => trim($id),
          'nombre' => trim($_POST['nombre']),
          'email' => trim($_POST['email']),
          'telefono' => trim($_POST['telefono'])
      );
      
      if($this->usuarioModelo->eliminarUsuario($datos)){
        redireccionar('pages');
      }else{
         die("Ups!! Algo Salió mal");
      }
    }else{
      
      $usuario = $this->usuarioModelo->obtenerUsuario($id);
      
      $datos = array(
          'usuario_id' => $usuario->usuario_id,
          'nombre' => $usuario->nombre,
          'email' => $usuario->email,
          'telefono' => $usuario->telefono
      );
     
     $this->view('borrar', $datos);
    }
  }
}