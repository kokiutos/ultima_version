<?php

    session_start();

    $error="";
    $usuario="";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $correo=$_POST['correo'];
        $clave=$_POST['clave'];

    
    try
    {
        $conexion= new PDO('mysql:host=localhost;dbname=inmobiliaria1','root','');
    }
    catch(PDOException $prueba_error)
    {
        echo "Error ".$prueba_error->getMessage();
    }
    $statement=$conexion->prepare('SELECT * FROM tbl_usuario WHERE correo=:correo AND clave=:clave');
    $statement->execute(array(
        ':correo'=>$correo,
        ':clave'=>$clave
    ));
    $resultado=$statement->fetch();
    if($resultado != false)
    {
        $_SESSION['correo']=$correo;
        include("conexion.php");

        $result = mysqli_query($conexion, "SELECT rol FROM tbl_usuario WHERE correo='$correo'");
        $row = mysqli_fetch_assoc($result);
        if($row['rol']=="propietario"){
            header('location:propietario.php');
        }else{
            header('location:admin');
        }
        
    }
    else
    {
        $error .='<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>DATOS ERRONEOS!</strong> verifique el correo y la clave.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
require 'frontend/login-vista.php';
?>