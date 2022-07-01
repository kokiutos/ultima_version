<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="build/img/icon.png" type="image/x-icon" height="auto">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="build/css/style.css">
</head>
<body id="fnd_inm">
    <header class="header inicio">
        <div class="contenedor contenido-header">
            <div class="barra">

                

                <div class="mobile-menu">
                    <img src="build/img/barras.svg" alt="icono menu responsive">
                </div>

                <div class="derecha">
                    <img class="dark-mode-boton" id="icon" src="build/img/dark-mode.svg">
                    
                    <nav class="navegacion">
                        <a href="nosotros.html">Nosotros</a>
                        
                        <a href="inmuebles.php">Mis Inmuebles</a>
                        <a href="nuevo.php">Nuevo</a>

                        <a href="contacto.html">Contacto</a>
                        <a href=""></a>
                        
                        <div class="dropdown">
                            <button class="btn btn-lg btn-secondary dropdown-toggle btn_ini" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Propietario
                            </button>
                            <ul class="dropdown-menu" id="fnd_ini">
                                <li id="tx_ini"><a class="dropdown-item" href="#" id="tx_ini"><?php echo ($row['nombre']." ".$row['apellido']); ?></a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="index.html" id="tx_ini">Salir</a></li>
                            </ul>
                        </div>
                        
                        
                    </nav>
                </div>
   
                
            </div> <!--.barra-->

            <h1>Venta de Casas y Departamentos</h1>
            
            
            
        </div>
    </header>
    <main class="contenedor seccion">

        <br><br>
        <h1><b>Más Sobre Nosotros</b> </h1>
        
        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" id="icon" alt="Icono seguridad" loading="lazy">
                <h3><b>Seguridad</b> </h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono2.svg" id="icon" alt="Icono Precio" loading="lazy">
                <h3><b>Precio</b> </h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
            <div class="icono">
                <img src="build/img/icono3.svg" id="icon" alt="Icono Tiempo" loading="lazy">
                <h3><b>A Tiempo</b> </h3>
                <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
            </div>
        </div>
        <br><br>
    </main>

    <section class="imagen-contacto">
        <h2>Encuentra la casa de tus sueños</h2>
        <p>Mira todo tipo de inmuebles, y busca el que más te guste</p>
        <a href="inmuebles.html" class="boton-amarillo">Inmuebles</a>
    </section>
    <br><br><br><br>
    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="nosotros.html">Nosotros</a>
                <a href="inmuebles.html">Inmuebles</a>
                <a href="anuncios.html">Anuncios</a>
                <a href="blog.html">Blog</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
        <a href="/">
            <img src="build/img/01_1.svg" alt="Logotipo de Bienes Raices" height="60px">
        </a>
        <p class="copyright">Todos los derechos Reservados 2022 &copy;</p>
    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>