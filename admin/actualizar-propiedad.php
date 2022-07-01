<?php
session_start();

// if (!$_SESSION['usuarioLogeado']) {
//     header("Location:login.php");
// }



//funcion que me perimete obtener una propiedad por id

function obtenerPropiedadPorId($id_propiedad)
{
    //Obtenemos la propiedad en base al id que recibimos por GET
    include("conexion.php");

    //Armamos el query para seleccionar la propiedad
    $query = "SELECT * FROM tbl_inmueble WHERE id='$id_propiedad'";

    //Ejecutamos la consulta
    $resultado_propiedad = mysqli_query($conn, $query);
    $propiedad = mysqli_fetch_assoc($resultado_propiedad);
    return $propiedad;
}
//tomo el id que me recibí y busco la propiedad
$id_propiedad = $_GET['id'];
$propiedad = obtenerPropiedadPorId($id_propiedad);

/************************************************************* */

/********************************************************/
//SELECCIONAMOS LOS TIPOS DE PROPIEDADES
//nos conectamos a la base de datos
include("conexion.php");

//Armamos el query para seleccionar los tipos
$query = "SELECT * FROM tipos";

//Ejecutamos la consulta
$resultado_tipos = mysqli_query($conn, $query);
/******************************************************/



/******************************************************* */
//GUARDAMOS LA PROPIEDAD
if (isset($_POST['actualizar'])) {
    //nos conectamos a la base de datos
    include("conexion.php");

    //tomamos los datos que vienen del formulario
    $id_propiedad = $_POST['id'];
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $estado = $_POST['estado'];
    
    $habitacion = $_POST['habitacion'];
    $banios = $_POST['banios'];
    $pisos = $_POST['pisos'];
    $garage = $_POST['garage'];
    $area = $_POST['area'];
    $precio = $_POST['precio'];
    $url_galeria = "url";
    
    
    $propietario = $_POST['nombre_propietario'];
    $telefono_propietario = $_POST['telefono_propietario'];


    //armamos el query para insertar en la tabla propiedades
    ///S E G U I R A Q U I!!!!!!!!!!!!!!!!!!!!
    $query = "UPDATE tbl_inmueble SET
     titulo='$titulo', 
     descripcion='$descripcion', 
     tipo='$tipo', 
     estado='$estado', 
     
     habitacion='$habitacion', 
     banios='$banios', 
     pisos='$pisos', 
     garage='$garage', 
     area='$area', 
     precio='$precio', 
     
     nombre_propietario='$propietario',
     telefono_propietario='$telefono_propietario'
     WHERE id='$id_propiedad'";

    //insertamos en la tabla propiedades
    if (mysqli_query($conn, $query)) { //Se insertó correctamente

        //Actualizamos la foto principal en caso que la haya cambiado
        if ($_POST['fotoPrincipalActualizada'] == "si") {
            include("actualizar-foto-principal.php");
        }

        if ($_POST['fotosGaleriaActualizada'] == "si") {
            //Agrego las fotos nuevas
            $id_ultima_propiedad = $id_propiedad;
            include("procesar-fotos-galeria.php");
        }

        //Prgunto si se eliminarion fotos
        $idsFotos =  $_POST['fotosAEliminar'];
        if ($idsFotos != "") {
            include("eliminar-fotos-de-galeria.php");
        }

        $mensaje = "La propiedad se actualizó correctamente";
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
    <script>
        function muestraselect(str) {
            var conexion;

            if (str == "") {
                document.getElementById("ciudad").innerHTML = "";
                return;
            }
            if (window.XMLHttpRequest) {
                conexion = new XMLHttpRequest();
            }

            conexion.onreadystatechange = function() {
                if (conexion.readyState == 4 && conexion.status == 200) {
                    document.getElementById("ciudad").innerHTML = conexion.responseText;
                }
            }

            conexion.open("GET", "ciudad.php?c=" + str, true);
            conexion.send();

        }
    </script>
    <script>
        $('#link-listado-propiedad').addClass('pagina-activa');
    </script>
</head>

<body>

    <?php include("header.php"); ?>

    <div id="contenedor-admin">
        <?php include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            
            <div id="actualizar-propiedad">
                <h2>Actualizar propiedad</h2>
                <hr>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <a href="abrir_listapro.php"><i class="fa fa-chevron-circle-left" height="20px!important" aria-hidden="true"></i></a>
                    <input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
                    <div class="fila-una-columna">
                        <label for="titulo">Título de la Propiedad</label>
                        <input type="text" name="titulo" value="<?php echo $propiedad['titulo'] ?>" required class="input-entrada-texto">
                    </div>

                    <div class="fila-una-columna">
                        <label for="descripcion">Descripción de la Propiedad</label>
                        <textarea name="descripcion" id="" cols="30" rows="10" class="input-entrada-texto"><?php echo $propiedad['descripcion'] ?></textarea>
                    </div>

                    <div class="fila">

                        <div class="box">
                            <label for="tipo">Tipo de propiedad</label>
                            <select name="tipo" id="" class="input-entrada-texto">
                                <?php while ($row = mysqli_fetch_assoc($resultado_tipos)) : ?>
                                    <?php if ($row['id'] == $propiedad['tipo']) : ?>
                                        <option value="<?php echo $row['id'] ?>" selected>
                                            <?php echo $row['nombre_tipo'] ?>
                                        </option>
                                    <?php else : ?>
                                        <option value="<?php echo $row['id'] ?>">
                                            <?php echo $row['nombre_tipo'] ?>
                                        </option>
                                    <?php endif ?>
                                <?php endwhile ?>
                            </select>
                        </div>


                        <div class="box">
                            <label for="estado">Elija estado de la propiedad</label>
                            <select name="estado" id="" class="input-entrada-texto">
                                <option value="venta" <?php if ($propiedad['estado'] == "Venta") {
                                                            echo "selected";
                                                        } ?>>Venta</option>
                                <option value="Alquiler" <?php if ($propiedad['estado'] == "Alquiler") {
                                                                echo "selected";
                                                            } ?>>Alquiler</option>
                            </select>
                        </div>

                        
                    </div>


                    <div class="fila">
                        <div class="box">
                            <label for="habitaciones">Habitaciones</label>
                            <input type="text" name="habitacion" value="<?php echo $propiedad['habitacion'] ?>" class="input-entrada-texto">
                        </div>

                        <div class="box">
                            <label for="baños">Baños</label>
                            <input type="text" name="banios" value="<?php echo $propiedad['banios'] ?>" class="input-entrada-texto">
                        </div>

                        <div class="box">
                            <label for="pisos">Pisos</label>
                            <input type="text" name="pisos" value="<?php echo $propiedad['pisos'] ?>" class="input-entrada-texto">
                        </div>

                    </div>


                    <div class="fila">
                        <div class="box">
                            <label for="garage">Garage</label>
                            <select name="garage" id="" class="input-entrada-texto">
                                <option value="No" <?php if ($propiedad['garage'] == "No") {
                                                        echo "selected";
                                                    } ?>>No</option>
                                <option value="Si" <?php if ($propiedad['garage'] == "Si") {
                                                        echo "selected";
                                                    } ?>>Si</option>
                            </select>
                        </div>

                        <div class="box">
                            <label for="dimensiones">Dimensiones</label>
                            <input type="text" name="area" value="<?php echo $propiedad['area'] ?>" class="input-entrada-texto">
                        </div>

                        <div class="box">
                            <label for="precio">Precio (Alquiler o Venta)</label>
                            <input type="text" name="precio" value="<?php echo $propiedad['precio'] ?>" class="input-entrada-texto">
                        </div>
                    </div>

                    <h2>Galería de Fotos</h2>
                    <div class="">
                        
                        <p>Foto principal (<label for="foto1" class="btn-cambiar-foto">Cambiar foto</label>)</p>
                        <output id="list" class="contenedor-foto-principal">
                            <img src="<?php echo $propiedad['url_foto_principal'] ?>" alt="">
                        </output>
                        
                        <input type="file" id="foto1" accept="image/*" name="foto1" style="display:none">
                        <input type="hidden" id="fotoPrincipalActualizada" name="fotoPrincipalActualizada">
                    </div>






                    <input type="submit" value="Actualizar Datos" name="actualizar" class="btn-accion">

                </form>
            </div>
        </div>

    </div>


    <?php if (isset($_POST['actualizar'])) : ?>

        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = 'listado-propiedades.php';
        </script>

    <?php endif ?>

    <script src="script.js"></script>
    <script src="subirFoto.js"></script>
    <script src="scriptFotosNuevas.js"></script>
    <script>
        $('#link-listado-propiedad').addClass('pagina-activa');
    </script>
</body>

</html>