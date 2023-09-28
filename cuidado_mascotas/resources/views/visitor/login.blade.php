<header id="header">
    @include('header')
  </header>

<body>


    
<main class="container col-xl-10 col-xxl-8 px-4 py-5 ">
  <form>
    <h1 class="col-md-10 mx-auto col-lg-5 h2 mb-3 fw-normal">Login</h1>
    <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/login" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf
          <div class="form-floating mb-3">
          <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre de usuario" required>
          <label for="nombre">Ingrese su nombre</label>
          </div>

          <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="email" placeholder="Correo electrónico" required>  
          <label for="email">Ingrese su direccion de correo</label>
          </div>

          <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña" required>  
          <label for="password">Ingrese su contraseña</label>
          
          </div>
          <!-- perfil -->
          <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
 
  
  </form>
</main>


</body>

<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>