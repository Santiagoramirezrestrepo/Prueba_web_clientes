<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];

  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $query = "UPDATE  cantanes_img SET imagen='$imagen' WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
