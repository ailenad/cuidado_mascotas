<!-- esta seria la home del administrador -->
<!-- <ul class="nav nav-pills">
        <li class="nav-item"><a href="crear_articulos" class="nav-link active" aria-current="page">Crear Articulos</a></li>
        <li class="nav-item"><a href="editar_articulos" class="nav-link">Modificar articulos</a></li>
        <li class="nav-item"><a href="eliminar_articulos" class="nav-link">Eliminar Articulos</a></li>
</ul> -->
<section id="crear_articulos" class="crear_articulos">
  <!-- ======= Footer ======= -->
  @include('admin.crear_articulos')
  <!-- End Footer -->
</section>
<section id="abm_articles" class="abm_articles">
<div class="container">
    <div class="row">
   
        @foreach($articulos as $articulo)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articulo->title }}</h5>
                        <p class="card-text">{{ $articulo->content}}</p>
                        <p>{{ $articulo->profile_id}}</p>
                        <!-- <button class=" btn btn-lg btn-primary" type="submit">Editar</button> -->
                        <button class="w-100 btn btn-lg btn-primary mb-3" type="submit"> <a href="/editar_articulos/{{ $articulo->id}}" class="nav-link">Editar</a></button>
                        <button class="w-100 btn btn-lg btn-primary" type="submit"> <a href="/eliminar_articulos" class="nav-link">Eliminar</a></button>
                        <!-- <button class="btn btn-lg btn-primary" type="submit">Eliminar</button> -->
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
    <footer id="footer" class="footer mt-5">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>