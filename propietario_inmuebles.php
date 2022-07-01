<?php
      session_start();
      include("conexion.php");
      $usuario=$_SESSION["correo"];

      $result = mysqli_query($conexion, "SELECT nombre, apellido FROM tbl_usuario WHERE correo='$usuario'");
      $row = mysqli_fetch_assoc($result);

      include ('propietario/inmuebles_propietario.php');
?>