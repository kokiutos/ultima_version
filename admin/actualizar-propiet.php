<?php
session_start();

// if (!$_SESSION['usuarioLogeado']) {
//     header("Location:login.php");
// }



//funcion que me perimete obtener una propiedad por id


//tomo el id que me recibí y busco la propiedad

include("conexion.php");
$id_propiedad = $_GET['identificacion'];
//Armamos el query para seleccionar la propiedad
$query = "SELECT * FROM tbl_usuario WHERE identificacion='$id_propiedad'";

//Ejecutamos la consulta
$resultado_propiedad = mysqli_query($conn, $query);
$propiedad = mysqli_fetch_assoc($resultado_propiedad);





/******************************************************* */
//GUARDAMOS LA PROPIEDAD
if (isset($_POST['actualizar'])) {
    //nos conectamos a la base de datos
    include("conexion.php");

    //tomamos los datos que vienen del formulario
    $identificacion = $_POST['identificacion'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    $estado = $_POST['estado'];
    $rol = $_POST['rol'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];


    //armamos el query para insertar en la tabla propiedades
    ///S E G U I R A Q U I!!!!!!!!!!!!!!!!!!!!
    $query = "UPDATE tbl_usuario SET
     identificacion='$identificacion',
     nombre='$nombre', 
     apellido='$apellido', 
     correo='$correo', 
     clave='$clave', 
     estado='$estado', 
     rol='$rol', 
     direccion='$direccion', 
     telefono='$telefono' 
     WHERE identificacion='$identificacion'";

    //insertamos en la tabla propiedades
    if (mysqli_query($conn, $query)) { //Se insertó correctamente
        $mensaje = "Propietario actualizado correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}


/******************************************************* */


?>


<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilo2.css">

</head>

<body>

    <?php include("header.php"); ?>

    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>
        <script>
            $('#link-listado-propiet').addClass('pagina-activa');
        </script>
        <div class="contenedor-principal">
            
            <div id="actualizar-propiedad">
                <h2>Actualizar propietario</h2>
                <hr>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <a href="abrir_propietaros.php"><i class="fa fa-chevron-circle-left" height="20px!important" aria-hidden="true"></i></a>
                    <input type="hidden" name="identificacion" value="<?php echo $propiedad['identificacion'] ?>">
                    <div class="fila">
                        <div class="box">
                            <label for="titulo">CC</label>
                            <input type="text" name="identificacion" value="<?php echo $propiedad['identificacion'] ?>" required class="input-entrada-texto">
                        </div>
                        <div class="box">
                            <label for="titulo">Nombre</label>
                            <input type="text" name="nombre" value="<?php echo $propiedad['nombre'] ?>" required class="input-entrada-texto">
                        </div>
                        <div class="box">
                            <label for="titulo">Apellido</label>
                            <input type="text" name="apellido" value="<?php echo $propiedad['apellido'] ?>" required class="input-entrada-texto">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <label for="titulo">Correo</label>
                            <input type="text" name="correo" value="<?php echo $propiedad['correo'] ?>" required class="input-entrada-texto">
                        </div>
                        <div class="box">
                            <label for="titulo">Clave</label>
                            <input type="text" name="clave" value="<?php echo $propiedad['clave'] ?>" required class="input-entrada-texto">
                        </div>
                        <div class="box">
                            <label for="titulo">Estado</label>
                            <input type="text" name="estado" value="<?php echo $propiedad['estado'] ?>" required class="input-entrada-texto">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <label for="titulo">Rol</label>
                            <input type="text" name="rol" value="<?php echo $propiedad['rol'] ?>" required class="input-entrada-texto">
                        </div>
                        <div class="box">
                            <label for="titulo">Dirección</label>
                            <input type="text" name="direccion" value="<?php echo $propiedad['direccion'] ?>" required class="input-entrada-texto">
                        </div>
                        <div class="box">
                            <label for="titulo">Telefono</label>
                            <input type="text" name="telefono" value="<?php echo $propiedad['telefono'] ?>" required class="input-entrada-texto">
                        </div>
                    </div>
                    <input type="submit" value="Actualizar Datos" name="actualizar" class="btn-accion">

                </form>
            </div>
        </div>

    </div>


    <?php if (isset($_POST['actualizar'])) : ?>

        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = 'listado-propietarios.php';
        </script>

    <?php endif ?>

    <script src="script.js"></script>
    <script src="subirFoto.js"></script>
    <script src="scriptFotosNuevas.js"></script>
    <script>
        $('#link-listado-propiet').addClass('pagina-activa');
    </script>
</body>

</html>