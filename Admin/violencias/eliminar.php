<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];

  $query = "DELETE FROM violencias_cura  WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Elimnados Exitosamante!!");
   window.location.href='index.php';
 </script>
