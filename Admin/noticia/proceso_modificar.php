<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];

  $titulo = $_POST['titulo'];
  $descrip = $_POST['descrip'];
  $noticia= $_POST['noticia'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $query = "UPDATE noticias_web SET titulo='$titulo',descrip='$descrip', imagen='$imagen', noticia='$noticia' WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
