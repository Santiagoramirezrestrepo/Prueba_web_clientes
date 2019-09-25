<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <title></title>
  </head>
  <body>
    <?php
      include("bd/conexion.php");

      $id = $_REQUEST['id'];

      $query = "SELECT * FROM noticias_web WHERE id = '$id' ";
      $resultado = $conexion->query($query);
      $row = $resultado->fetch_assoc();
     ?>

    <div class="container center">
      <div class="row">
        <div class="col s12">
          <h1>Imagenes Links</h1>
          <form class="" action="proceso_modificar.php?id= <?php echo $row['id']; ?>" method="post" enctype="multipart/form-data">
              <input type="text" required  name="titulo" placeholder="Link" value=<?php echo $row['titulo']; ?>><br><br>
              <textarea name="descrip" placeholder="Descrición" required rows="8" cols="80"><?php echo $row['descrip']; ?></textarea>
              <textarea name="noticia" placeholder="Noticia " required rows="8" cols="80"><?php echo $row['noticia']; ?></textarea>
              <img height="120px" src="data:image/jpg;base64, <?php echo base64_encode($row['imagen']);  ?>"/></td><br>
              <input type="file" required name="imagen"><br><br>
              <input type="submit" value="Aceptar">
              <br><br><br>
              <a href="index.php">Regresar</a>
          </form>
        </div>

      </div>

    </div>
  </body>
</html>
