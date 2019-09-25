<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title></title>
  </head>
  <body>
    <div class="container-fluid center">
      <ul id="slide-out" class="sidenav">
        <li> <a href="../index.php">Pagina Principal</a></li>
        <li> <a href="../imagen/index.php">Imagen de la Web</a></li>
        <li><a href="../videos/index.php">La Canción</a></li>

      </ul>
      <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <div class="row">
        <div class="col s4">
          <h1>Cantantes</h1>
          <form class="" action="proceso_guardar.php" method="post" enctype="multipart/form-data">
              <input type="file" required name="imagen"><br><br>
              <input type="submit" value="Aceptar">
              <br><br><br>
          </form>
        </div>

        <div class="col s8">
          <table border="2">
          <thead>
            <tr class="center">
              <th>Imagen</th>
              <th colspan="2">Opciones</th>
            </tr>
          </thead>
          <tbody>
            <?php
              include("../../bd/conexion.php");

              $query = "SELECT * FROM cantanes_img ";
              $resultado = $conexion->query($query);
              while ($row = $resultado->fetch_assoc()) {
             ?>
             <tr>
              <td><img height="90px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/></td>
              <th>
                <a class="waves-effect waves-light btn modal-trigger" href="modificar.php?id=<?php  echo $row['id']; ?>">Modificar</a>

                </th>
              <th><a class="waves-effect waves-light btn modal-trigger" href="eliminar.php?id=<?php  echo $row['id']; ?>">Eliminar</a></th>
              </tr>
             <?php
              }
             ?>
          </tbody>
          </table>
        </div>

      </div>

    </div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../../js/materialize.js"></script>
    <script src="../../js/init.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
          var elems = document.querySelectorAll('.sidenav');
          var instances = M.Sidenav.init(elems, options);
        });

        // Initialize collapsible (uncomment the lines below if you use the dropdown variation)
        // var collapsibleElem = document.querySelector('.collapsible');
        // var collapsibleInstance = M.Collapsible.init(collapsibleElem, options);

        // Or with jQuery

        $(document).ready(function(){
          $('.sidenav').sidenav();
        });
    </script>
  </body>
</html>
