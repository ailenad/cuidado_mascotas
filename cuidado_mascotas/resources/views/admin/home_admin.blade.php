 <!-- voy a poner un formulario de login, despues le damos estilo 
Mi tabla de usuario necesita: 
  $table->id();
            $table->string('email',100)->unique();
            $table->string('nombre',50);
            $table->string('password');
            $table->timestamps(); -->
<header id="header">
    @include('header')
</header>

<section id="crear_articulos" class="crear_articulos">
  <form class="container col-xl-10 col-xxl-8 px-4 py-5 ">
    <h1 class="col-md-10 mx-auto col-lg-5 h2 mb-3 fw-normal">Login</h1>
    <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/home_admin" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf

          <div class="form-floating mb-3">
          <label for="first_name">Nombre</label>
            <input type="text" name="first_name" class="form-control" id="floatingInput" placeholder="Nombre" required>
          </div>  
          <div class="form-floating mb-3">
          <label for="last_name">Apellido</label>
          <input type="text" name="last_name" class="form-control" id="floatingInput" placeholder="Apellido" required>
          </div>  
 
  
  </form>

</section>


<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>
   




