<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet" />

    <link rel="stylesheet" href="build/css/style.css" />
    <link rel="stylesheet" href="build/css/app.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="bg-gradient-primary2">
    <div class="container">
      <!-- Outer Row -->
      <div class="row justify-content-center">
        <div class="col-xl-12 col-lg-12 col-md-9">
          <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
              <!-- Nested Row within Card Body -->
              <div class="row">
                <div class="col-lg-6 d-none d-lg-block">
                  <img
                    src="build/img/perrohijueputatrabajo.jpg"
                    height="700px"
                    width="250"
                  />
                </div>
                <div class="col-lg-6">
                  <div class="p-5">
                    <div class="text-center">
                      <h1 class="h4 text-gray-900 mb-4" style="padding-bottom: 10px; font-size: 5em;">Bienvenido de nuevo</h1>
                      <hr>
                    </div>
                    <form
                      style="width: 50rem;"
                      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>"
                      method="post"
                    >
                      <div class="form-group" style="padding-bottom: 10px; padding-top: 10px;">
                        <input
                          type="email"
                          class="form-control form-control-user"
                          name="correo"
                          id="form2Example18"
                          aria-describedby="emailHelp"
                          placeholder="Correo electrónico"
                          style="font-size: 18px"
                          
                        />
                      </div>
                      <div class="form-group" style="padding-bottom: 10px;">
                        <input
                          type="password"
                          class="form-control form-control-user"
                          name="clave"
                          id="form2Example28"
                          placeholder="Contraseña"
                          style="font-size: 18px"
                        />
                      </div>

                      <?php if(!empty($error)): ?>
                      <div class="mensaje">
                        <?php echo $error; ?>
                      </div>
                      <?php endif; ?>

                      <div class="d-grid gap-2" style="padding-bottom: 10px;">
                        <button style="font-size: 18px" class="btn btn-primary" id="" type="submit">
                          Iniciar Sesión
                        </button>
                      </div>
                      <hr />
                    </form>
                    <hr />
                    <div class="text-center">
                      <a class="" style="font-size: 18px" href="registro.php">Crea una cuenta</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>
