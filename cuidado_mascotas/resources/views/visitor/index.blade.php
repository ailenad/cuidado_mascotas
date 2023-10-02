<body>

  <!-- ======= Header ======= -->
  <header id="header">
    @include('header')
  </header><!-- End Header -->
 <section>
 <img class="d-block mx-auto mb-4" src="{{ asset('/img/home.png')}}" alt="">
 </section>
  <main id="main">
  <div id="servicios">
  @include('servicios')
  </div>
</main>
<footer id="footer" class="footer">
  <!-- ======= Footer ======= -->
  @include('footer')
  <!-- End Footer -->
</footer>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <!-- <script src="{{ asset('/js/main.js')}}"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
