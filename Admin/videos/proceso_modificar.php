<?php
  include ("../../bd/conexion.php");

  $id=$_REQUEST['id'];

  $videos = $_POST['videos'];

  $query = "UPDATE videos_web SET videos='$videos' WHERE id='$id'";
  $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
