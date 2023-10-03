<section id="header" class="header">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  
  <meta content="" name="description">
  <meta content="" name="keywords">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
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
          <!-- <div class="form-floating mb-3">
            <input type="number" name="profile_id"  id="profile_id" required class="form-control" id="floatingInput">
            <label for="profile_id">Id</label>
          </div> -->
          <div class="form-floating mb-3">
            <input type="text" name="title" id="title" required  class="form-control" id="floatingPassword">
            <label for="title">Titulo</label>
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" name="content" id="content" rows="7"></textarea>
            <label for="content" class="form-label">Descripción:</label>
          </div>
          <div class="form-floating mb-3">
              <input type="text" name="category" id="category" class="form-control">
              <label for="category">Categoría:</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" type="submit">Publicar</button>
        </form>
        <button class="w-100 btn btn-lg btn-primary" type="submit"> <a href="/index" class="nav-link">Inicio</a></button>
      </div>
    </div>
  </div>
</select>

   
   


