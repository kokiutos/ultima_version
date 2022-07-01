<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  
    <link rel="stylesheet" href="build/css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.css"
      rel="stylesheet"
    />

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.1.0/mdb.min.js"
    ></script>

    <title>Registro</title>
  </head>
  <body id="c_log">
    <section class="vh-100" style="background-color: #eee" id="fnd_log">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-12 col-xl-11">
            <div class="card text-black">
              <div class="card-body p-md-5">
                <div class="row justify-content-center">
                  <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              

                    <img
                      src="build/img/login.jpg"
                      style="border-radius: 5px;"
                      class="img-fluid"
                      alt="Sample image"
                    />
                    
                  </div>
                  <div
                    class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2"
                  >
                    <form
                      class="mx-1 mx-md-4"
                      action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
                      method="post"
                    >
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">
                        Crea una cuenta nueva!
                      </p>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="text"
                            id="form3Example1c"
                            name="nombre"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example1c"
                            >Nombre</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="text"
                            id="form3Example1c"
                            name="apellido"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example1c"
                            >Apellido</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="text"
                            id="form3Example1c"
                            name="identificacion"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example1c"
                            >Cedula</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="text"
                            id="form3Example1c"
                            name="direccion"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example1c"
                            >Dirección</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="text"
                            id="form3Example1c"
                            name="telefono"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example1c"
                            >Telefono</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="email"
                            id="form3Example3c"
                            name="correo"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example3c"
                            >Correo</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="password"
                            id="form3Example4c"
                            name="clave"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example4c"
                            >Contraseña</label
                          >
                        </div>
                      </div>

                      <div class="d-flex flex-row align-items-center mb-4">
                        <div class="form-outline flex-fill mb-0">
                          <input
                            type="password"
                            id="form3Example4cd"
                            name="clave2"
                            class="form-control"
                          />
                          <label class="form-label" for="form3Example4cd"
                            >Repite la contraseña</label
                          >
                        </div>
                      </div>

                      <?php if(!empty($error)): ?>
                      <div class="mensaje">
                        <?php echo $error; ?>
                      </div>
                      <?php endif; ?>

                      <div
                        class="d-grid gap-2"
                      >
                        <button
                          type="submit"
                          class="btn btn-primary"
                        >
                          Registrar
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
