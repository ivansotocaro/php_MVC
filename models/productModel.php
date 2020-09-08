<?php

include "../config/connection.php";

class productModel{

  private $pdo; 
  private $id; 
  private $name; 
  private $price; 
  private $description; 

  function __construct()
  {
    $this->pdo = new connection();
    $this->pdo = $this->pdo->connect();
  }

  public function setId($id)
  {
    $this->id = $id;
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
    return $this->name;
  }
  
  public function setPrice($price)
  {
    $this->price = $price;
    return $this->price;
  }

  public function setDescription($description)
  {
    $this->description = $description;
    return $this->description;
  }



  function listProduct()
  {
    $sql = "SELECT * FROM product";
    $sentece = $this->pdo->prepare($sql); 
    $sentece->execute();
    $listproduct = $sentece->fetchAll(PDO::FETCH_ASSOC);
    return $listproduct;

  }

  function saveProduct()
  {
    $sql = "INSERT INTO product(name, price, description) values(:name,:price,:description)";
    $sentence = $this->pdo->prepare($sql);
    $sentence->execute(array(":name" => $this->name, ":price" => $this->price, ":description" => $this->description));
    return $sentence;
  }

  function deleteProduct()
  {
    $sql = "DELETE FROM product WHERE id =". $this->id;
    $sentence = $this->pdo->prepare($sql);
    $sentence->execute();
    return $sentence;
  }

  function getProduct()
  {
    $sql = "SELECT * FROM product WHERE id =". $this->id;
    $sentence = $this->pdo->prepare($sql);
    $sentence->execute();
    $listproduct = $sentence->fetchAll(PDO::FETCH_ASSOC);
    return $listproduct;
  }

}
?>