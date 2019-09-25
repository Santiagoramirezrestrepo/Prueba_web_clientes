<?php
    include ("../../bd/conexion.php");


    $titulo=$_POST['titulo'];
    $descrip=$_POST['descrip'];
    $noticia=$_POST['eventos'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO eventos_web (titulo,descrip,imagen,eventos) VALUES ('$titulo','$descrip','$imagen','eventos')";
    $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
