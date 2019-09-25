<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <?php
      include("../bd/conexion.php");

      $query = "SELECT * FROM imagen_web";
      $resultado = $conexion->query($query);
      while ($row = $resultado->fetch_assoc()) {
     ?>
       <link rel="icon" type="image/png" href= "data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>" />
     <?php
      }
     ?>
    <title></title>
  </head>
  <body>
    <div class="container-fluid center">
      <div class="row">
        <div class="col s12">
            <h1>Bienvenido al administrador</h1>
            <img src="" alt="">
          <ul id="slide-out" class="sidenav">
            <li> <a href="slider/index.php">Slider</a></li>
            <li> <a href="imagen/index.php">Datos Web</a></li>
            <li><a href="videos/index.php">La Canción</a></li>
            <li><a href="eventos/index.php">Eventos</a></li>
            <li><a href="noticia/index.php">Noticias</a></li>
            <li><a href="violencias/index.php">Violencias</a></li>
            <li><a href="galeria/index.php">Galería 1</a></li>
            <li><a href="galeria2/index.php">Galería 2</a></li>
          </ul>
          <?php
            include("../bd/conexion.php");

            $query = "SELECT * FROM imagen_web ";
            $resultado = $conexion->query($query);
            while ($row = $resultado->fetch_assoc()) {
           ?>
           <tr>
            <td><img height="90px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/></td>
            </tr>
           <?php
            }
           ?>
           <br>
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
      </div>

    </div>


    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
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
