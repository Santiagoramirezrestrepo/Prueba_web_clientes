<?php
    include ("../../bd/conexion.php");


    $videos=$_POST['videos'];

    $query = "INSERT INTO videos_web (videos) VALUES ('$videos')";
    $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
