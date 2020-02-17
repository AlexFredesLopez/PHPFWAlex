<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DB {
  
  // Clase para conextar a la base de datos
  
  private $host = DB_HOST;
  private $usuario = DB_USER;
  private $password = DB_PASSWORD;
  private $nombreBase = DB_NOMBRE;
  
  private $dbh;
  private $stmt;
  private $error;
  
  public function __construct() {
    
    
    
    
    $dsn = 'pgsql:dbname='.$this->nombreBase.';host='.$this->host.'';
    
    $opciones  = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    );
    
    
   
    // crear una instancia de PDO
    
    try {
      $this->dbh = new PDO($dsn, $this->usuario, $this->password, $opciones);
      
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $e->getMessage();
    }
      
  }
  
  
  //preparamos la consulta
  public function query($sql){
    $this->stmt = $this->dbh->prepare($sql);
  }
  
  // Vinculamos la consulta con bind
  public function bind($parameter, $valor, $tipo = null){
    if(is_null($tipo)){
      switch (true){
        case is_int($valor):
          $tipo = PDO::PARAM_INT;
          break;
        case is_bool($valor);
          $tipo = PDO::PARAM_BOOL;
          break;
        case is_null($valor):
          $tipo = PDO::PARAM_NULL;
          break;
        default :
          $tipo = PDO::PARAM_STR;
          break;
      }
    }
    
    $this->stmt->bindValue($parameter, $valor, $tipo);
    
    
  }
  
  
  // Ejecuta la consulta
  public function execute(){
    return $this->stmt->execute();
    
  }
  
  
  // Obtener los registros de la consulta
  
  public function registers(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }
  
  // Obtener un registro
  public function register(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_OBJ);
  }
  
  // Obtener la cantidad de regisstros (row_count)
  
  public function rowCount(){
    
    return $this->stmt->rowCount();
  }
  
}