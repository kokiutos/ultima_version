<?php 
session_start();


    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $correo = $_POST['correo'];
        $apellido = $_POST['apellido'];
        $nombre = $_POST['nombre'];
        $identificacion=$_POST['identificacion'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $clave = $_POST['clave'];
        $clave2 = $_POST['clave2'];

        
        $error = '';
        
        if (empty($correo) or empty($nombre) or empty($apellido) or empty($identificacion) or empty($direccion) or empty($clave) or empty($clave2) or empty($telefono)){
            
            $error .='<div class="alert alert-dismissible fade show alert-danger" role="alert" data-mdb-color="warning" id="customxD">
            <strong>DATOS FALTANTES!</strong> rellena todos los campos.
            <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
          </div>';

        }else{
            try{
                $conexion = new PDO('mysql:host=localhost;dbname=inmobiliaria1', 'root', '');
            }catch(PDOException $prueba_error){
                echo "Error: " . $prueba_error->getMessage();
            }
            
            $statement = $conexion->prepare('SELECT * FROM tbl_usuario WHERE correo = :correo LIMIT 1');
            $statement->execute(array(':correo' => $correo));
            $resultado = $statement->fetch();
            
                        
            if ($resultado != false){
                $error .= '<div class="alert alert-dismissible fade show alert-danger" role="alert" data-mdb-color="warning" id="customxD">
                <strong>Correo ya existe!</strong>
                <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            
            if ($clave != $clave2){
                $error .= '<div class="alert alert-dismissible fade show alert-danger" role="alert" data-mdb-color="warning" id="customxD">
                <strong>Contraseñas no coinciden!</strong>
                <button type="button" class="btn-close" data-mdb-dismiss="alert" aria-label="Close"></button>
              </div>';
            }
            
            
        }
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO tbl_usuario (identificacion, nombre, apellido, correo, clave, estado, rol, direccion, telefono) VALUES (:identificacion, :nombre, :apellido, :correo, :clave, "activo", "propietario", :direccion, :telefono)');
            $statement->execute(array(
                ':identificacion'=> $identificacion,
                ':nombre'=> $nombre,
                ':apellido'=> $apellido,
                ':correo' => $correo,
                ':clave' => $clave,
                ':direccion'=> $direccion,
                ':telefono' => $telefono
                
            ));
            
            $error .= '<div>
            <i style="color: #AE9E63;">Usuario registrado exitosamente <a href="login.php" style="color: #141414;" id="vl_rg">Iniciar sesión</a></i>
          </div>';
        }
    }


    require 'frontend/registro-vista.php';

?>