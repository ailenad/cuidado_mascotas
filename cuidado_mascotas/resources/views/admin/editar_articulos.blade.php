<header id="header">
    @include('header')
  </header>

<section id="editar_articulos" class="editar_articulos">

<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Editar el articulo</h1>
        <p class="col-lg-10 fs-4">Tu voz importa! Siempre estamos en busca de la información más actualizada y los consejos más efectivos sobre el cuidado de mascotas. Si tienes alguna corrección, actualización o información adicional que crees que sería valiosa para nuestra comunidad, te invitamos a editar este contenido. Juntos, podemos garantizar que nuestros recursos sean siempre precisos y útiles. ¡Gracias por tu contribución y por hacer que este blog sea aún mejor!</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/editar_articulos/{{ $article->id }}" class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="number" name="profile_id" id="profile_id" required class="form-control" id="floatingInput">
            <label for="profile_id">Id</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" name="title" id="title" required  class="form-control" id="floatingPassword">
            <label for="title">Titulo</label>
          </div>
          <div class="form-floating mb-3">
          <label for="content" class="form-label">Descripción:</label>
          <textarea class="form-control" name="content" id="content" rows="3"></textarea>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
  </div>
   
</section>


<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>