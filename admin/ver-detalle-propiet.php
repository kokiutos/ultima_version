<?php
session_start();

// if (!$_SESSION['usuarioLogeado']) {
//     header("Location:login.php");
// }
$_SESSION["correo"]=$_SESSION["correo"];
$correo = $_SESSION["correo"];
//Obtenemos la propiedad en base al id que recibimos por GET
include("conexion.php");
$id_propiedad = $_GET['id'];

//Armamos el query para seleccionar la propiedad
$query = "SELECT * FROM tbl_usuario WHERE identificacion='$id_propiedad'";

//Ejecutamos la consulta
$resultado_propiedad = mysqli_query($conn, $query);
$propiedad = mysqli_fetch_assoc($resultado_propiedad);
/************************************************************* */


?>






<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../build/img/icon.png" type="image/x-icon" height="auto">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>Admin</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>
        <script>
            $('#link-listado-propiet').addClass('pagina-activa');
        </script>
        <div class="contenedor-principal">
            <div id="detalle-propiedad">
                
                <h2>Detalle Propietario</h2>
                <hr>
                <div class="contenedor-tabla">
                    <a href="abrir_propietaros.php"><i class="fa fa-chevron-circle-left" height="20px!important" aria-hidden="true"></i></a>
                    <h3>Descripción</h3>
                    <table class="descripcion">
                        <tr>
                            <td>CC</td>
                            <td><?php echo $propiedad['identificacion'] ?></td>
                        </tr>
                        <tr>
                            <td>Nombre</td>
                            <td> <?php echo $propiedad['nombre'] ?> </td>
                        </tr>

                        <tr>
                            <td>Apellido</td>
                            <td> <?php echo $propiedad['apellido'] ?> </td>
                        </tr>

                        <tr>
                            <td>Correo</td>
                            <td><?php echo $propiedad['correo'] ?> </td>
                        </tr>

                        <tr>
                            <td>Clave</td>
                            <td><?php echo $propiedad['clave'] ?> </td>
                        </tr>

                        <tr>
                            <td>Estado</td>
                            <td><?php echo $propiedad['estado'] ?> </td>
                        </tr>

                        <tr>
                            <td>Rol</td>
                            <td><?php echo $propiedad['rol'] ?> </td>
                        </tr>

                        <tr>
                            <td>Direccion</td>
                            <td><?php echo $propiedad['direccion'] ?> </td>
                        </tr>

                        <tr>
                            <td>Telefono</td>
                            <td><?php echo $propiedad['telefono'] ?> </td>
                        </tr>

                    
                    </table>
                </div>

               


                


            </div>
        </div>
    </div>
    <script>
        $('#link-listado-propiet').addClass('pagina-activa');
    </script>
</body>

</html>