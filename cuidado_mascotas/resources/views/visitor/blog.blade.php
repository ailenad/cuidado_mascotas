<header id="header">
    @include('header')
  </header>
  
<section id="blog" class="blog">


<div class="px-4 py-5 my-5 text-center">

    <img class="d-block mx-auto mb-4" src="{{ asset('/img/consejos.png')}}" >
    <h1 class="display-5 fw-bold text-body-emphasis">Bienvenido a nuestro blog</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">¡Bienvenidos a nuestro blog dedicado al amor y cuidado de nuestras mascotas! Acá encontrarás consejos útiles y recursos esenciales. Únete a nuestra comunidad de amantes de las mascotas y descubre cómo crear una vida feliz y saludable para tus fieles amigos de cuatro patas.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Comenzar</button>
      </div>
    </div>
  </div>
</section>

<section id="crear_articulos" class="crear_articulos">
  <!-- ======= Footer ======= -->
  @include('admin.crear_articulos')
  <!-- End Footer -->
</section>


<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>