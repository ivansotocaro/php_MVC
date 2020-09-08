<?php include_once("../config/global.php");?>
<?php include_once("./component/header.php");?>


  <nav class="navbar navbar-dark bg-primary">
    <p>CRUD</p>
    <a href="./product.php" id="volver">Volver</a>
  </nav>

    <form action="saveproduct.php" method="POST" enctype="multipart/form-data">

    
  <div class="container mt-5">
     <div class="row">
       <div class="col-md-5">
          <input type="hidden" name="id" class="form-control" value="" placeholder="Name..">
          <input type="text" name="name" class="form-control" value="" placeholder="Name..">
       </div>

       <div class="col-md-5">
          <input type="text" name="price" class="form-control" value="" placeholder="Price..">
       </div>
     </div>

     <div class="row mt-4">
       <div class="col-md-5">
          <input type="text" name="description" class="form-control" value="" placeholder="Description..">
       </div>

       <div class="col-md-5">
          <input type="file"  class="form-control-file" name="imagen"  value="" id="file" onchange="previewImagen()">
          <img  class="mt-3 " id="preview" width="180px" src="" >
       </div>
     </div>
  
     <div class="row mt-4">
       <div class="col-md-1">
            <button name="updatedata" type="submit" id="updata" class="btn btn-primary  ">Updata</button>
       </div>
       <div class="col-md-1">
            <a href="./product.php" id="cancelar" class="btn btn-danger">Cancelar</a>
       </div>
     </div>
   </div>
  </form>


  
 <?php require_once("./component/footer.php");?>