<link rel="shortcut icon" href="../build/img/icon.png" type="image/x-icon" height="auto">

<?php
      session_start();
      include("conexion.php");
      $_SESSION["correo"]=$_SESSION["correo"];
      include ('../propietario/listado-propiedades.php');
?>