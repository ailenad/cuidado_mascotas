<header id="header">
    @include('header')
  </header>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Eliminar el articulo</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/editar_articulos" class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="number" name="profile_id" id="profile_id" required class="form-control" id="floatingInput">
            <label for="profile_id">Id</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Eliminar</button>
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