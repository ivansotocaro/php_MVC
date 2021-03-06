$(document).ready(function () {
  $(document).on("click", "#save", function () {
    var name = "";
    var price = 0;
    var description = "";
    var ruta = "";

    ruta = "../controllers/productController.php";
    name = $("#name").val();
    price = $("#price").val();
    description = $("#description").val();

    $.ajax({
      url: ruta,
      data: {
        peticion: "save",
        name: name,
        price: price,
        description: description,
      },
      type: "POST",
      statusCode: {
        404: function () {
          alert.error("La Ruta de la pagina no es la correcta");
        },
      },
    })
      .done(function (data) {
        console.log(data);
        if (data) {
          //I clean the form
          clean();
          //delete
          $("#table").empty();
          listTable();
          alert("Guardado");
        } else {
          alert("Error al Guardar");
        }
      })
      .fail(function () {
        alert("error");
      });
  });

  function listTable() {
    $.ajax({
      type: "POST",
      url: "../controllers/productController.php",
      data: {
        peticion: "listdata",
      },
    }).done(function (data) {
      dato = JSON.parse(data);

      $("#contenedor").empty();
      for (let i = 0; i < dato.length; i++) {
        var datas = dato[i];
        var table = `
            <tr >
              <td class="idtable">${datas["id"]}</td>
              <th scope="row">${datas["name"]}</th>
              <td>${datas["price"]}</td>
              <td>${datas["description"]}</td>
              <td>
                  <button name="update" type="submit" id="update"  class="btn btn-primary btn-sm ">Update</button>
                  <button name="delete" type="submit" id="delete" class="btn btn-danger btn-sm ">Delete</button> 
              </> 
            </tr>  
        `;

        $("#table").append(table);
      }
    });
  }

  listTable();

  $(document).on("click", "#delete", function () {
    var id = 0;
    var fila = $(this).closest("tr");
    id = parseInt(fila.find("td:eq(0)").text());
    var ruta = "../controllers/productController.php";

    $.ajax({
      type: "POST",
      url: ruta,
      data: {
        peticion: "delete",
        id: id,
      },
    }).done(function (data) {
      if (data) {
        //I clean the form
        $("#table").empty();
        listTable();
        alert("Eliminado");
      } else {
        alert("Error al eliminar");
      }
    });
  });

  $(document).on("click", "#update", function () {
    var id = 0;
    var fila = $(this).closest("tr");
    id = parseInt(fila.find("td:eq(0)").text());

    var ruta = "../controllers/productController.php";

    $.ajax({
      url: ruta,
      data: {
        peticion: "update",
        id: id,
      },
      type: "POST",
      statusCode: {
        404: function () {
          alert.error("La Ruta de la pagina no es la correcta");
        },
      },
    })
      .done(function (data) {
        var datos = JSON.parse(data);

        for (let i = 0; i < dato.length; i++) {
          ///POr aqui voy- 05/09/2020
        }
      })
      .fail(function () {
        alert("error");
      });
  });

  function clean() {
    $("#name").val("");
    $("#price").val("");
    $("#description").val("");
  }
});
