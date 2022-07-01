<?php
      session_start();
      include("conexion.php");
      $_SESSION["correo"]=$_SESSION["correo"];
      include ('admin/index.php');
?>