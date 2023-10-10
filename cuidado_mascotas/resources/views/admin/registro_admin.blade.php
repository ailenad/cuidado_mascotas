<header id="header">
    @include('header')
</header>

<section id="crear_articulos" class="crear_articulos">
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Registro</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/registro_admin" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf
          <!-- usuario -->

          <div class="form-floating mb-3">
          <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre de usuario" required>
          <label for="nombre">Ingrese su nombre</label>
          </div>
          
          @error('nombre')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         

          <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electrónico" required>
            <label for="Email">Ingrese su direccion de correo</label>
          </div>
          @error('email')
                 <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          

          <div class="form-floating mb-3">
          <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" placeholder="Contraseña" required>
            <label for="email">Ingrese su contraseña</label>
          </div>
          @error('password')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         

          <!-- perfil -->
          <div class="form-floating mb-3">
            <input type="text" name="first_name" class="form-control  @error('first_name') is-invalid @enderror" placeholder="Nombre" required>
            <label for="first_name">Nombre</label>
          </div>  
          @error('first_name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror


          <div class="form-floating mb-3">
          <input type="text" name="last_name" class="form-control  @error('last_name') is-invalid @enderror" placeholder="Apellido" required>
            <label for="last_name">Apellido</label>
          </div>   
          @error('last_name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button class="w-100 btn btn-lg btn-primary" type="submit">Registrarse</button>
        </form>
        <button class="w-100 btn btn-lg btn-primary" type="submit"> <a href="/login_admin" class="nav-link">Iniciar Sesion</a></button>
      </div>
    </div>
  </div>
</select>


<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>
   




