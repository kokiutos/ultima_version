<?php

$servidor='localhost';
$basedatos='inmobiliaria1';
$usuario='root';
$contrasena='';

$conexion=new mysqli($servidor,$usuario,$contrasena,$basedatos);

if($conexion->connect_errno)
{
    echo "Nuestra conexion presenta fallas";
    exit();
}
?>


