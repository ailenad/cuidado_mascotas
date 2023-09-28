<header id="header">
    @include('header')
  </header>

<body>


    
<main class="container col-xl-10 col-xxl-8 px-4 py-5 ">
  <form>
    <h1 class="col-md-10 mx-auto col-lg-5 h2 mb-3 fw-normal">Login</h1>
    <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/home_admin" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf



          <div class="form-floating mb-3">
          <label for="nombre">Ingrese su nombre</label>
          <input type="text" name="nombre" class="form-control" id="floatingInput" placeholder="Nombre de usuario" required>
          </div>
          <div class="form-floating mb-3">
          <label for="Email">Ingrese su direccion de correo</label>
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Correo electrónico" required>
          </div>
          <div class="form-floating mb-3">
          <label for="email">Ingrese su contraseña</label>
          <input type="password" name="password" class="form-control" id="floatingInput" placeholder="Contraseña" required>
          </div>
          <!-- perfil -->
          <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
 
  
  </form>
</main>
<script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>