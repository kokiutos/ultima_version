<?php
session_start();

//Si el usuario no esta logeado lo enviamos al login
// if ($_SESSION['usuarioLogeado']) {
//     header("Location:index.php");
// }

include("funciones.php");

//con la función obtenerTotalRegistros obtengo el total de registros de una tabla
// el nombre de la tabla lo mando por paramaetro
$totalPropiedades = obtenerTotalRegistros('tbl_inmueble');
$totalpropietarios = obtenerTotalRegistros('tbl_usuario')


?>

<!DOCTYPE html>
<html lang="es">

<head>    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo2.css">
    <title>Admin</title>


</head>

<body>
    <div id="contenedor-admin">
        <?php 
            
            include("conexion.php");
            $_SESSION["correo"]=$_SESSION["correo"];

            include("contenedor-menu.php"); 
            ?>

        <div class="contenedor-principal">
            <div id="dashboard">
                <h2>Dashboard</h2>
                <hr>
           

                        <p>Total Propiedades: <?php echo $totalPropiedades ?></p>
                        <hr>

                   
                        <p>Total Propietarios: <?php echo $totalpropietarios ?></p>
                        <hr>

           
              

                </div>
            </div>
        </div>
    </div>

    <script>
        $('#link-dashboard').addClass('pagina-activa');
    </script>

</body>

</html>