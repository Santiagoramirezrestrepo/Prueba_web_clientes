<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];

  $titulo = $_POST['titulo'];
  $descrip = $_POST['descrip'];
  $eventos= $_POST['eventos'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $query = "UPDATE eventos_web SET titulo='$titulo',descrip='$descrip', imagen='$imagen', eventos='$eventos' WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
