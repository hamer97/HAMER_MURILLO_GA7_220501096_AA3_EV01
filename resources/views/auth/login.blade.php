<!DOCTYPE html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Meta etiquetas requeridas -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" >
    
    <!-- Enlace a archivo CSS personalizado -->
    <link rel="stylesheet" href="assets/estilos.css">
</head>

<body>
<!-- Sección con un formulario de inicio de sesión -->
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <!-- Columna izquierda con el formulario de inicio de sesión -->
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <!-- Encabezado con el logo y el título -->
                <div class="text-center">
                  <!-- Logo -->
                  <img src="https://img.freepik.com/fotos-premium/repartidor-pizzas-dibujos-animados-3d-montando-scooter_1029679-14673.jpg?w=740"
                    style="width: 185px;" alt="logo">
                  <!-- Título -->
                  <h4 class="mt-1 mb-5 pb-1">INGRESA A TU CUENTA</h4>
                </div>

                <!-- Formulario de inicio de sesión -->
                <form action="{{route('login')}}" method="post">
                    @csrf
                  <!-- Etiqueta del formulario -->
                  <p>INICIAR SESIÓN</p>

                  <!-- Campo de entrada para el correo electrónico -->
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example11">Usuario</label>
                    <input type="email" name="email" id="form2Example11" class="form-control"
                    placeholder="Ingresa tu correo"/>
                    
                   
                  </div>
                  

                  <!-- Campo de entrada para la contraseña -->
                  <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="form2Example22">Contraseña</label>
                    <input type="password" name="password" id="form2Example22" class="form-control" 
                    placeholder="Ingresa tu contraseña"
                    />
                    
                  </div>

                  <!-- Botón de inicio de sesión -->
                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">Ingresar</button>
                    <!-- Enlace para recuperar contraseña -->
                    <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                  </div>

                  <!-- Sección para crear una nueva cuenta -->
                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">No tienes una cuenta?</p>
                    <!-- Enlace para crear una nueva cuenta -->
                    <a href="{{route('register')}}"  class="btn btn-outline-danger">Crear cuenta</a>
                  </div>

                </form>

              </div>
            </div>
            <!-- Columna derecha con información de la empresa -->
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-black px-3 py-4 p-md-5 mx-md-4">
                <!-- Título de la empresa -->
                <h4 class="mb-4">DOMI X-PRESS</h4>
                <!-- Texto descriptivo -->
                <p class="small mb-0"></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bibliotecas de JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" 



