<?php
  $conexion= new mysqli("localhost", "user_cura", "cura1234", "bd_lacura");
  //Comprobar conexion
  if($conexion){
  }
  else {
    echo "Conexion no exitosa";
  }
?>
