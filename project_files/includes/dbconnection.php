<?php

class Database{
  protected $connection;
  protected function __construct(){
    try{
      $conn = mysqli_connect(
        getenv('localhost'),
        getenv('quiksalesaus'),
        getenv('passwordjagodina'),
        getenv('quik_sales_australia')
        );
      if( $conn ){
        $this -> connection = $conn;
      }
      else{
        throw new Exception('Database connection error');
      }
    }
    catch( Exception $exc ){
      echo $exc;
    }
  }
}
?>