<?php

class Conexion{
  private $pdo;
  public function __construct(){
    $host = DB_HOST;
    $name = DB_NAME;
    $user = DB_USER;
    $password = DB_PASS;
    $charset = DB_CHAR;
    
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
    ];

    $dsn = "mysql:host=" . $host . ";dbname=" . $name . ";charset=" . $charset;

    $this->pdo = new PDO($dsn, $user, $password, $opt);
  }

  public function consulta($query){
    $ob = $this->pdo->query($query);
    return $ob;
  }
  // public function recorrer($query){
  //   return sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC);
  // }
  // public function liberar($query){
  //   return sqlsrv_free_stmt($query);
  // }
  // public function cerrar(){
  //   return sqlsrv_close($this->link);
  // }
  // public function inicioTransaccion(){
  //   return sqlsrv_begin_transaction($this->link);
  // }
  // public function beginTransaction(){
  //   return sqlsrv_begin_transaction($this->link);
  // }
  // public function commit(){
  //   return sqlsrv_commit($this->link);
  // }
  // public function rollback(){
  //   return sqlsrv_rollback($this->link);
  // }
  // public function validar($stmt){
  //   return sqlsrv_rows_affected($stmt);
  // }
  // public function rows($query){
  //     return sqlsrv_num_rows($query);
  // }
  // public function hasRows($query){
  //     return sqlsrv_has_rows($query);
  // }
}//class Conexion