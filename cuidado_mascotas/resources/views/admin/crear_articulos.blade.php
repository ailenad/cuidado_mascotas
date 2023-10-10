<header id="header">
    @include('header')
</header>
<section id="crear_articulos" class="crear_articulos">
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Crear un nuevo articulo</h1>
        <p class="col-lg-10 fs-4">Tu experiencia y conocimiento son valiosos para nuestra comunidad. ¿Tienes un consejo o truco que funcionó para cuidar a tus mascotas? Animate a agregar tu consejo y ayudanos a construir juntos un recurso aún más completo y útil.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="/crear_articulos" class="p-4 p-md-5 border rounded-3 bg-light">
          @csrf
          <div class="form-floating mb-3">
            <input type="text" name="title" id="title" required  class="form-control @error('title') is-invalid @enderror" id="floatingPassword">
            <label for="title">Titulo</label>
          </div>
          @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
         

          <div class="form-floating mb-3">
            <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content"  rows="7"></textarea>
            <label for="content" class="form-label">Descripción:</label>
          </div>
          @error('content')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <div class="form-floating mb-3">
              <input type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror">
              <label for="category">Categoría:</label>
          </div>
          @error('category')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror

          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
      </div>
    </div>
  </div>
</select>

   
   


