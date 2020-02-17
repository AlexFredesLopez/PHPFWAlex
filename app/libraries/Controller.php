<?php

// Clase controlador principal
// Se encarga de poder cargar los modelos y las vistas
class Controller {
  
  // Casrgar modelo
  
  public function model($model){
    // Carga modelo
    
    require_once SYS_PATH .'models/'.$model.".php";
    
    // INstanciar el modelo
    
    return new $model();
    
    
  }
  
  // cargar vista
  public function view($view, $datos = []){
    // Chequear si existe vista
    
    if(file_exists(SYS_PATH .'views/'.$view.".php")){
      require_once SYS_PATH .'views/'.$view.".php";

    }else{
      // si el archivo no existe
      die("la vista no existe");
    }
    
    
    
  }
}