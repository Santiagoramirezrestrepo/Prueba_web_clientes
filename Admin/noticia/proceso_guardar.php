<?php
    include ("../../bd/conexion.php");


    $titulo=$_POST['titulo'];
    $descrip=$_POST['descrip'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

    $query = "INSERT INTO noticias_web (titulo,descrip,imagen,noticia) VALUES ('$titulo','$descrip','$imagen','$noticia')";
    $resultado = $conexion->query($query);

 ?>
 <script type="text/javascript">
   alert("Datos Modificados Exitosamante!!");
   window.location.href='index.php';
 </script>
