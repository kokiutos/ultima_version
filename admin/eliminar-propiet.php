<?php

    include("conexion.php");
    $id = $_GET['idPropiedad'];

    //determino la cantidad de fotos que tiene la publicacion
    $query = "DELETE FROM tbl_inmueble WHERE identificacion = '$id'";
    $result = mysqli_query($conn, $query);

   
    //Primero eliminamos todas los registros del las fotos de la BD
    $query = "DELETE FROM tbl_usuario WHERE identificacion= '$id'";
    $result = mysqli_query($conn, $query);

?>
<script>
    alert("Se eliminó todo sobre el usuario");
    window.location.href = 'listado-propietarios.php';
</script>
