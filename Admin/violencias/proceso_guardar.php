<?php
    include ("../../bd/conexion.php");


    $titulo=$_POST['titulo'];
    $icon=$_POST['icon'];

    $query = "INSERT INTO violencias_cura (titulo,icon) VALUES ('$titulo','$icon')";
    $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
