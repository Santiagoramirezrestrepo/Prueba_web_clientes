<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];


  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $query = "UPDATE galeria_web2 SET imagen='$imagen' WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
