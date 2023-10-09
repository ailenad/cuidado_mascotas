<header id="header">
    @include('header')
  </header>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Eliminar el articulo</h1>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="{{ route('eliminar_articulos', ['id' => $article->id]) }}" method="POST" class="p-4 p-md-5 border rounded-3 bg-light">
        @csrf
    @method('DELETE')
    
        <div class="form-floating mb-3">
            <input type="number" name="profile_id" id="profile_id" required class="form-control" id="floatingInput">
            <label for="profile_id">Id</label>
          </div>
          <button type="submit" class="btn btn-danger">Eliminar Artículo</button>
        </form>
      </div>
    </div>
  </div>
   
</section>
