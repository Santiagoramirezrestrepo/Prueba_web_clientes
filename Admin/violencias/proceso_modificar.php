<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];

  $titulo = $_POST['titulo'];
  $icon = $_POST['icon'];

  $query = "UPDATE violencias_cura SET titulo='$titulo', icon='$icon' WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
