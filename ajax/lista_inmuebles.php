<?php
    include("conexion.php");
    $data='';
	  $query = "SELECT * FROM tbl_inmueble";
    
    

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
   
    
     // if query results contains rows then featch those rows 
     if(mysqli_num_rows($result) > 0)
     {
         $number=1;
         while( $row = mysqli_fetch_assoc($result))
         {
            $cedula=$row['identificacion'];
            $result2 = mysqli_query($con, "SELECT nombre, apellido, correo, telefono FROM tbl_usuario WHERE identificacion='$cedula'");
            $row2 = mysqli_fetch_assoc($result2);
             $data .= '<div class="card">
             <div class="card-header text-center" id="titulo_card">
               <p id="titulo_card"><strong >'.$row['titulo'].'</strong></p>
             </div>
             <div class="card-body">
               <div class="row">
                 <div class="col-4">
                   <img src="'.str_replace("../","",$row['url_foto_principal']).'" class="float-md-end mb-3 ms-md-3" alt="...">
                 </div>
                 <div class="col-8">
                   <div class="row">
                     <div class="col">
                       <i class="bi bi-geo-alt-fill"><h5 class="card-title">'.$row['ciudad'].'</h5></i>
                     </div>
                     <div class="col text-center">
                       <p><strong>'.$row['estado'].'</strong></p>
                     </div>
                     
                   </div>
                   <hr>
                   <div class="row">
                     <p class="fs-4">'.$row['descripcion'].'</p>
                   </div>
                   <hr>
                   <div class="row">
                     <div class="col">
                       <p class="fs-4"><strong>'.$row['area'].' '.'Km2'.'</strong></p>
                     </div>
                     <div class="col">
                       <p>'.$row['pisos'].' pisos</p>
                     </div>
                     <div class="col text-center">
                       <i class="bi bi-currency-dollar" style="background-size: 2rem 2rem !important;">'.$row['precio'].'</i>
                     </div>
                   </div>
                   <hr>
                   <div class="row">
                     <div class="col-3"><br></div>
                     <div class="col-8 justify-content-center">
                       <ul class="iconos-caracteristicas">
                         <li>
                             <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                             <p>'.$row['banios'].'</p>
                         </li>
                         <li>
                             <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                             <p>'.$row['garage'].'</p>
                         </li>
                         <li>
                             <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono habitaciones">
                             <p>'.$row['habitacion'].'</p>
                         </li>
                       </ul>
                     </div>
                     
                   </div>
                 
                   
                 </div>
               </div>
               <div class="row mnsj">
                <div class="alert alert-dark" role="alert">
                  <div class="row">
                    <div class="col-4">
                      <i class="bi bi-person-bounding-box"><p><strong>Propietario: </strong>'.$row2['nombre'].' '.$row2['apellido'].'</p></i>
                    </div>
                    <div class="col-4">
                      <i class="bi bi-envelope-fill"><p><strong>Correo: </strong>'.$row2['correo'].'</p></i>
                    </div>
                    <div class="col-4">
                      <i class="bi bi-telephone-fill"><p><strong>Telefono: </strong>'.$row2['telefono'].'</p></i>
                    </div>
                  </div>
                  
                </div>
              </div>
             </div>
           </div> <br><br>
           ';
             $number++;
         }
     }

     echo $data;

?>