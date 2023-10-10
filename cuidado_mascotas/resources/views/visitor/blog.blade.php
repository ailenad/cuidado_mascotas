<header id="header">
    @include('header')
  </header>
  
<section id="blog" class="blog">


<div class="px-4 py-5 my-5 text-center">

    <img class="d-block mx-auto mb-4" src="{{ asset('/img/consejos.png')}}" >
    <h1 class="display-5 fw-bold text-body-emphasis">Bienvenido a nuestro blog</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">¡Bienvenidos a nuestro blog dedicado al amor y cuidado de nuestras mascotas! Acá encontrarás consejos útiles y recursos esenciales.</p>
    </div>
    
  </div>
</section>
<section>

<div class="container">
    <div class="row">
   
        @foreach($articulos as $articulo)
            <div class="col-md-4">
                <div class="card mb-5">
                    <div class="card-body">
                        <h5 class="card-title">{{ $articulo->title }}</h5>
                        <p class="card-text">{{ $articulo->content}}</p> 
                    </div>
                </div>
            </div>
        @endforeach
    </div>

  
</section>




<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>