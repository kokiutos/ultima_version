<?php
session_start();

//Si el usuario no esta logeado lo enviamos al login
// if ($_SESSION['usuarioLogeado']) {
//     header("Location:index.php");
// }

include("funciones.php");

//con la función obtenerTotalRegistros obtengo el total de registros de una tabla
// el nombre de la tabla lo mando por paramaetro

?>

<!DOCTYPE html>
<html lang="es">

<head>    
    <link rel="shortcut icon" href="../build/img/icon.png" type="image/x-icon" height="auto">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo2.css">
    <title>Propietario</title>


</head>

<body>

    <div id="contenedor-admin">
        <?php 
            
            include("conexion.php");
            $_SESSION["correo"]=$_SESSION["correo"];
            $usuario2=$_SESSION['correo'];
            $result2 = mysqli_query($conn, "SELECT identificacion FROM tbl_usuario WHERE correo='$usuario2'");
            $row2 = mysqli_fetch_assoc($result2);
            $totalPropiedades = obtenerTotalRegistros('tbl_inmueble',$row2['identificacion']);
            
            include("contenedor-menu.php"); 
            ?>

        <div class="contenedor-principal">
            <div id="dashboard">
                <h2>Dashboard</h2>
                <hr>

                        <p>Mis Inmuebles: <?php echo $totalPropiedades ?> 
                        </p>
                        <hr>

            </div>
        </div>
    </div>

    <script>
        $('#link-dashboard').addClass('pagina-activa');
    </script>

</body>

</html>



















