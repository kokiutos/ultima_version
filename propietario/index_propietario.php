


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>EstateAgency Bootstrap Template</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="paulinaFront/img/favicon.png" rel="icon">
  <link href="paulinaFront/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="paulinaFront/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="paulinaFront/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="paulinaFront/lib/animate/animate.min.css" rel="stylesheet">
  <link href="paulinaFront/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="paulinaFront/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="paulinaFront/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: EstateAgency
    Theme URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <div class="click-closed"></div>
  
  <!--/ Nav Star /-->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html">Agencia<span class="color-b">Inmobiliaria</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a href="propietario_inmuebles.php">Inmuebles</a>
          </li>         
          <li class="nav-item">
          <a href="propietario/index.php">Mis Inmuebles</a>
          </li>
          <li class="nav-item">
          <li id="tx_ini"><a class="dropdown-item" href="#" id="tx_ini"><?php echo ($row['nombre']." ".$row['apellido']); ?></a></li>
          </li>
          <li class="nav-item">
          <li><a class="dropdown-item" href="index.html" id="tx_ini">Salir</a></li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->




  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(paulinaFront/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bogot??
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Casa 
                      <br> Chapinero</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Alquiler $ 1.800.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(paulinaFront/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bogot??
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Casa
                      <br> Chapinero</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Alquiler $ 2.000.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(paulinaFront/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Bogot??
                      <br> 78345</p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Casa
                      <br> Chapinero</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Alquiler $ 12.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

 

  <!--/ Property Star /-->
  <section class="section-property section-t8">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-wrap d-flex justify-content-between">
            <div class="title-box">
              <h2 class="title-a">??ltimas propiedades</h2>
            </div>
            <div class="title-link">
              <a href="property-grid.html">Todas laspropiedades
                <span class="ion-ios-arrow-forward"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div id="property-carousel" class="owl-carousel owl-theme">
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="paulinaFront/img/property-6.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">206 Apartamento
                      <br /> Medell??n</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Alquiler $ 1.200.000</span>
                  </div>
                  <a href="#" class="link-a">Haz click aqu??
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Habitaciones</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Ba??os</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item-b">
          <div class="card-box-a card-shadow">
            <div class="img-box-a">
              <img src="paulinaFront/img/property-3.jpg" alt="" class="img-a img-fluid">
            </div>
            <div class="card-overlay">
              <div class="card-overlay-a-content">
                <div class="card-header-a">
                  <h2 class="card-title-a">
                    <a href="property-single.html">157 Casa
                      <br /> Barranquilla</a>
                  </h2>
                </div>
                <div class="card-body-a">
                  <div class="price-box d-flex">
                    <span class="price-a">Alquiler  $ 2.000.000</span>
                  </div>
                  <a href="property-single.html" class="link-a">Click aqu??
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
                <div class="card-footer-a">
                  <ul class="card-info d-flex justify-content-around">
                    <li>
                      <h4 class="card-info-title">Area</h4>
                      <span>340m
                        <sup>2</sup>
                      </span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Habitaciones</h4>
                      <span>2</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Ba??os</h4>
                      <span>4</span>
                    </li>
                    <li>
                      <h4 class="card-info-title">Garajes</h4>
                      <span>1</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Property End /-->

 
  <!--/ footer Star /-->
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Inicio</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Propiedades</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-dribbble" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="paulinaFront/lib/jquery/jquery.min.js"></script>
  <script src="paulinaFront/lib/jquery/jquery-migrate.min.js"></script>
  <script src="paulinaFront/lib/popper/popper.min.js"></script>
  <script src="paulinaFront/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="paulinaFront/lib/easing/easing.min.js"></script>
  <script src="paulinaFront/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="paulinaFront/lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="paulinaFront/js/main.js"></script>

</body>
</html>
