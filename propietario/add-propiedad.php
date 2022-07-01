<?php

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
if (isset($_POST['agregar'])) {
    //nos conectamos a la base de datos
    include("conexion.php");

    //tomamos los datos que vienen del formulario
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
    $url_foto_principal = "url";
    $identificacion=$_POST['identificacion'];
    
    $ciudad = $_POST['ciudad'];
    $propietario = $_POST['nombre_propietario'];
    $telefono_propietario = $_POST['telefono_propietario'];

    //armamos el query para insertar en la tabla propiedades
    $query = "INSERT INTO tbl_inmueble (id,identificacion,titulo, descripcion, tipo, estado,habitacion, banios, pisos, garage, area, precio, url_foto_principal,ciudad, nombre_propietario, telefono_propietario)
    VALUES (NULL,'$identificacion', '$titulo', '$descripcion','$tipo','$estado','$habitacion','$banios','$pisos','$garage','$area','$precio', '','$ciudad','$propietario','$telefono_propietario')";

    //insertamos en la tabla propiedades
    if (mysqli_query($conn, $query)) { //Se insertó correctamente
        include("procesar-foto-principal.php");
        $mensaje = "La propiedad se inserto correctamente";
    } else {
        $mensaje = "No se pudo insertar en la BD" . mysqli_error($conn);
    }
}


/******************************************************* */


?>


<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propietario</title>
    <link rel="shortcut icon" href="../build/img/icon.png" type="image/x-icon" height="auto">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
</head>

<body>
    <div id="contenedor-admin">
        <?php 
            include("conexion.php");
            $_SESSION["correo"]=$_SESSION["correo"];
            $usuario2=$_SESSION['correo'];
            $result2 = mysqli_query($conn, "SELECT nombre, apellido, telefono, identificacion FROM tbl_usuario WHERE correo='$usuario2'");
            $row2 = mysqli_fetch_assoc($result2);
            $nombreu=$row2['nombre']." ".$row2['apellido'];
            $telefonou=$row2['telefono'];
            $identificacionu=$row2['identificacion'];
            include("contenedor-menu.php"); ?>

        <div class="contenedor-principal">
            <div id="nueva-propiedad" style="text-align: center;">
                <h2 style="font-size:45px; color: black">Nuevo Inmueble</h2>

                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data" method="post">
                    <div class="fila-una-columna">
                        <input type="text" name="titulo" required class="input-entrada-texto" placeholder="Nombre del Inmueble">
                    </div>

                    <div class="fila-una-colummna">
                        <textarea name="descripcion" id="" cols="30" rows="10" class="input-entrada-texto" placeholder="Descripcion"></textarea></textarea>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <select name="tipo" id="" class="input-entrada-texto">
                            <option value="" disabled selected hidden >Seleccione tipo de propiedad</option>
                                <?php while ($row = mysqli_fetch_assoc($resultado_tipos)) : ?>
                                    <option value="<?php echo $row['id'] ?>">
                                        <?php echo $row['nombre_tipo'] ?>
                                    </option>
                                <?php endwhile ?>
                            </select>
                        </div>

                        <div class="box">
                            <select name="estado" id="" class="input-entrada-texto">
                            <option value="" disabled selected hidden >Elija estado de la propiedad</option>
                                <option value="Venta">Venta</option>
                                <option value="Alquiler">Alquiler</option>
                            </select>
                        </div>
                        
                        <div class="box">
                            <input type="text" name="ciudad" class="input-entrada-texto" placeholder="Ciudad">
                        </div>
                        
                    </div>

                    <div class="fila">
                        <div class="box">
                            <input type="text" name="habitacion" class="input-entrada-texto" placeholder="Habitaciones">
                        </div>


                        <div class="box">
                            <input type="text" name="banios" class="input-entrada-texto" placeholder="Baños">
                        </div>

                        <div class="box">
                            <input type="text" name="pisos" class="input-entrada-texto" placeholder="Pisos">
                        </div>
                    </div>

                    <div class="fila">
                        <div class="box">
                            <select name="garage" id="" class="input-entrada-texto">
                            <option value="" disabled selected hidden >Garage</option>
                                <option value="No">No</option>
                                <option value="Si">Si</option>
                            </select>
                        </div>

                        <div class="box">
                            <input type="text" name="area" class="input-entrada-texto" placeholder="Area">
                        </div>

                        <div class="box">
                            <input type="text" name="precio" class="input-entrada-texto" placeholder="Precio del inmueble">
                        </div>

                    </div>




                    <div>

                        <h2 style="align-text: center">Foto del inmueble</h2>

                        <label for="foto1" class="btn-fotos"> Subir foto</label>
                        <output id="list" class="contenedor-foto-principal">
                            <div style="align-items:center"> 
                            <img src="<?php echo $propiedad['url_foto_principal'] ?>" alt="">
                        </output>
                        
                        <input type="file" id="foto1" accept="image/*" name="foto1" style="display:none">
                        </div>
                    </div>


                    <div class="fila">
                       
                    

                        <div class="box">
                            <input type="hidden" name="nombre_propietario" class="input-entrada-texto" value="<?php echo $nombreu ?>">
                        </div>
                        <div class="box">
                            <input type="hidden" name="identificacion" class="input-entrada-texto" value="<?php echo $identificacionu ?>">
                        </div>

                    </div>
                    <div class="fila">
                        <div class="box">
                            <input type="hidden" name="telefono_propietario" class="input-entrada-texto" value="<?php echo $telefonou ?>">
                        </div>
                    </div>
                    <hr>
                    <input type="submit" value="Agregar Propiedad" name="agregar" class="btn-accion">

                </form>

            </div>
        </div>
    </div>

    <?php if (isset($_POST['agregar'])) : ?>
        <script>
            alert("<?php echo $mensaje ?>");
            window.location.href = '../propietario/abrir_listapro.php';
        </script>
    <?php endif ?>

    <script>
        $('#link-add-propiedad').addClass('pagina-activa');
    </script>

    <script src="subirfoto.js"></script>
    <script src="scriptFotos.js"></script>
</body>

</html>