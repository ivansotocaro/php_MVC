<?php

include __DIR__ ."/config.php";

class connection{

  private $server;
  private $user;
  private $pass;
  private $db;

  function __construct()
  {
    $this->server = SERVER; 
    $this->user = USER; 
    $this->pass = PASS; 
    $this->db = DB; 
    
  }

  function connect(){

    $servidor = "mysql:host=".$this->server.";dbname=".$this->db;
    try {
      $pdo = new PDO($servidor, $this->user, $this->pass);
      return $pdo;
      // echo "<script>alert('Conectado')</script>";
  
    } catch (PDOException $e) {

      echo "<script>alert('Error' .$e->getMessage())</script>";
    }

  }
}

?>