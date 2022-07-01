<div class="contenedor-menu">
    <br>
    <?php
        include("conexion.php");
        $usuario2=$_SESSION['correo'];
        $_SESSION["correo"]=$_SESSION["correo"];
        $result2 = mysqli_query($conn, "SELECT nombre, apellido FROM tbl_usuario WHERE correo='$usuario2'");
        $row2 = mysqli_fetch_assoc($result2);
        echo ("Admin: ".$row2['nombre']." ".$row2['apellido']."<br>"); ?>
    <br>
    <hr>
    <h2>MENU</h2>
    <nav>
        <ul>
            <li id="link-dashboard">
                <a href="index.php">
                    Registros
                </a>
            </li>
            
            <li id="link-listado-propiet">
                <a href="abrir_propietaros.php">
                    Listado de Propietarios
                </a>
            </li>

            <li id="link-listado-propiedades">
                <a href="abrir_listapro.php">

                    Listado de Inmuebles
                </a>
            </li>


            <hr>

            <li id="link-ver-sitio">
                <a href="../index.html" target="_blank">

                    Ver Sitio Web
                </a>
            </li>

            <li>
                <a href="cerrar-sesion.php">

                    Cerrar sesión
                </a>
            </li>
        </ul>

    </nav>
</div>