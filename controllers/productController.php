<?php

include "../models/productModel.php";
include "../config/global.php";

class productController extends productModel{

  function __construct()
  {
    parent::__construct();
  }

}


if( isset($_POST["peticion"]) ) {
  $listdata = $_POST["peticion"];
  $model = new productController();


  switch($listdata) {

    //Listdata product
    case 'listdata':
      
      $datos = $model->listProduct();
      echo json_encode($datos);
    break;

    //save data from product
    case 'save':

      $model->setName($_POST["name"]);
      $model->setPrice($_POST["price"]);
      $model->setDescription($_POST["description"]);

      $datos = $model->saveProduct();
      echo $datos;
    break;

    case 'delete':

      $model->setId($_POST["id"]);
      $datos = $model->deleteProduct();
      echo $datos;
      
    break;

    case 'update':

      $model->setId($_POST["id"]);
      $datos = $model->getProduct();
      echo json_encode($datos);;

    break;

  }
}
// $obj = new productController();
// $obj->list();
?>