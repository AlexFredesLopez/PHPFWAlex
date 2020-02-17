<?php

/*
 * Mapear la url ingresada en el navegador
 * 1- Controlador
 * 2- Metodo
 * 3- Parámetro
 * 4- Definir variables globales
 */


class Core {
  protected $controladorActual  = 'pages';
  protected $metodoActual       = 'index';
  protected $parametros         = [];
  
  // Constructor
  public function __construct() {
//    print_r($this->getUrl());
    $url = $this->getUrl();
    
    // BUscar en controladores si el controlados existe
    
    if(file_exists(SYS_PATH."controllers/". ucwords(strtolower($url[0])) . ".php")){
      // Si existe se setea como controlador por defecto
      $this->controladorActual = ucwords(strtolower($url[0]));
      
      // Unset controlador
      unset($url[0]);
    }
    
    // Requiere el controlador
    require_once(SYS_PATH .'controllers/'.$this->controladorActual . ".php");
    
    $this->controladorActual = new $this->controladorActual;
    
    // Chequear la segunda parte de la URL que seria el metodo
    
    if(isset($url[1])){
      if(method_exists($this->controladorActual, $url[1])){
        // Chequeamos el metodo

        $this->metodoActual = $url[1]; 
        unset($url[1]);
      }
    }
    
    // Para priobar trae metodo
    
    $this->parametros = $url ? array_values($url) : [];
    
    call_user_func_array([$this->controladorActual, $this->metodoActual],$this->parametros);
    
    
    
  }
  
  public function getUrl(){
    
    if(isset($_GET['url'])){
      $url = rtrim($_GET['url'], '/');
      $url = filter_var($url, FILTER_SANITIZE_URL);
      $url = explode('/', $url);
      
      return $url;
    }
  }
}