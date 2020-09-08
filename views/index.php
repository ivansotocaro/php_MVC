<?php include_once("../config/global.php");?>
<?php include_once("./component/header.php");?>


  
  <nav class="navbar navbar-dark bg-primary">
    <p>CRUD</p>
  </nav>

  <!-- <form action="#" method="post" enctype="multipart/form-data"> -->
  <div class="container mt-5">
     <div class="row">
       <div class="col-md-5">
          <input type="hidden" name="id" id="id" class="form-control" >
          <input type="text" name="name" id="name" class="form-control" placeholder="Name..">
       </div>

       <div class="col-md-5">
          <input type="text" name="price" id="price" class="form-control" placeholder="Price..">
       </div>
     </div>

     <div class="row mt-4">
       <div class="col-md-5">
          <input type="text" name="description" id="description" class="form-control" placeholder="Description..">
       </div>
     </div>

     <div class="row mt-4">
       <div class="col-md-1">
            <button name="save" type="submit" id="save" class="btn btn-primary btn-sm btn-block">Add</button>
       </div>
     </div>
   </div>
  <!-- </form> -->

  <div class="container">
    <div class="row">
      <div class="col-md-12 mt-5">
       
        <table class="table mb-5">
          <thead class="thead-dark">
            <tr>
              <th scope="col" class="idtable">id</th>
              <th scope="col">Name</th>
              <th scope="col">Price</th>
              <th scope="col">Description</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody id="table">

          </tbody>
        </table>

      </div>
    </div>
  </div>



  <?php require_once('./component/footer.php'); ?>
  

</body>
</html>
  
