<?php

    include("conexion.php");
    $id = $_GET['idPropiedad'];

    //Ahora elimino el registro de la propiedad
    $query = "DELETE FROM tbl_inmueble WHERE id = '$id'";
    mysqli_query($conn, $query);
?>
<script>
    alert("La propiedad se eliminĂ³");
    window.location.href = 'listado-propiedades.php';
</script>