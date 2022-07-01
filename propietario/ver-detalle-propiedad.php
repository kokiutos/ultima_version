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
$query = "SELECT * FROM tbl_inmueble WHERE id='$id_propiedad'";

//Ejecutamos la consulta
$resultado_propiedad = mysqli_query($conn, $query);
$propiedad = mysqli_fetch_assoc($resultado_propiedad);
/************************************************************* */


function obtenerTipo($id_tipo)
{
    include("conexion.php");
    $query = "SELECT * FROM tipos WHERE id='$id_tipo'";

    //Ejecutamos la consulta
    $resultado_tipo = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($resultado_tipo);
    return $row['nombre_tipo'];
}

function obtenerFotosGaleria($id_propiedad)
{
    include("conexion.php");
    $query = "SELECT * FROM fotos WHERE id_propiedad='$id_propiedad'";

    //Ejecutamos la consulta
    $resultado_fotos = mysqli_query($conn, $query);
    return $resultado_fotos;
}

function obtenerPais($id_pais)
{
    include("conexion.php");
    $query = "SELECT * FROM paises WHERE id='$id_pais'";

    //Ejecutamos la consulta
    $resultado_pais = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($resultado_pais);
    return $row['nombre_pais'];
}

function obtenerCiudad($id_ciudad)
{
    include("conexion.php");
    $query = "SELECT * FROM ciudades WHERE id='$id_ciudad'";

    //Ejecutamos la consulta
    $resultado_ciudad = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($resultado_ciudad);
    return $row['nombre_ciudad'];
}

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
    <title>Propietario</title>
</head>

<body>
    <?php include("header.php"); ?>
    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); 

        $result2 = mysqli_query($conn, "SELECT nombre, apellido, telefono FROM tbl_usuario WHERE identificacion='$propiedad[identificacion]'");
        $row2 = mysqli_fetch_assoc($result2);
        ?>
        <script>
            $('#link-listado-propiedad').addClass('pagina-activa');
        </script>
        <div class="contenedor-principal">
            <div id="detalle-propiedad">
                <h2>Detalle de Propiedad</h2>
                <hr>
                <div class="contenedor-tabla">
                    <a href="../propietario/abrir_listapro.php"><i class="fa fa-chevron-circle-left" height="20px!important" aria-hidden="true"></i></a>
                    <h3>Descripción de la propiedad</h3>
                    <table class="descripcion">
                        <tr>
                            <td>ID de la propiedad</td>
                            <td><?php echo $propiedad['id'] ?></td>
                        </tr>
                        <tr>
                            <td>Título de la propiedad</td>
                            <td> <?php echo $propiedad['titulo'] ?> </td>
                        </tr>

                        <tr>
                            <td>Descripción de la propiedad</td>
                            <td> <?php echo $propiedad['descripcion'] ?> </td>
                        </tr>

                        <tr>
                            <td>Tipo de propiedad</td>
                            <td> <?php echo obtenerTipo($propiedad['tipo']) ?> </td>
                        </tr>

                        <tr>
                            <td>Estado de la propiedad</label></td>
                            <td> <?php echo $propiedad['estado'] ?> </td>
                        </tr>

                       

                        <tr>
                            <td>Habitaciones</label></td>
                            <td> <?php echo $propiedad['habitacion'] ?> </td>
                        </tr>

                        

                        <tr>
                            <td>Pisos</td>
                            <td> <?php echo $propiedad['pisos'] ?> </td>
                        </tr>

                        <tr>
                            <td>Garaje</td>
                            <td> <?php echo $propiedad['garage'] ?> </td>
                        </tr>

                        <tr>
                            <td>Area</td>
                            <td> <?php echo $propiedad['area'] ?> </td>
                        </tr>

                        <tr>
                            <td>Precio</td>
                            <td> <?php echo $propiedad['precio'] ?> </td>
                        </tr>
                    </table>
                </div>

                <div class="contenedor-tabla">
                    <h3>Galería de Fotos</h3>
                    <table class="descripcion">
                        <tr>
                            <td>Foto Principal</td>
                            <td><img src="<?php echo $propiedad['url_foto_principal'] ?>" alt=""></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#link-listado-propiedad').addClass('pagina-activa');
    </script>
</body>

</html>