<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"/>
  </head>
  <body>
  
    
    <div class="container">
      <!--Logo Corporativo-->
        <div class="text-center h1 my-5 font-weight-light text-uppercase">
          <p>Empresa</p>
        </div>
      <!--Logo Corporativo-->
      
      <!--Navbar-->
    
        <nav class="navbar navbar-expand-md navbar-light border-top border-bottom mb-5">
          <button class="navbar-toggler float-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto font-weight-bold">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Nosotros</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href="#">Servicios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contacto</a>
              </li>
            </ul>
          </div>
        </nav>  
      
      <!--Navbar-->
    
    
    
    <!--Slider-->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?=RUTA_URL?>public/img/1.jpg" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?=RUTA_URL?>public/img/2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?=RUTA_URL?>public/img/3.jpeg" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    <!--Slider-->
    
    
    <!--tres columnas-->
      <div class="row my-5 text-center">
        <div class="col-md-4">
          <div class="text-info h1">
            <i class="fas fa-battery-three-quarters"></i>
          </div>
          <p class="text-muted">Lorem ipsum dolor sit.</p>
          <h4 class="text-uppercase font-weight-light">Lorem ipsum dolor.</h4>
          <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto debitis qui numquam. Minima, dolorum, a architecto assumenda quaerat eligendi quidem.</p>
        </div>
        <div class="col-md-4">
          <div class="text-info h1">
            <i class="fas fa-battery-three-quarters"></i>
          </div>
          <p class="text-muted">Lorem ipsum dolor sit.</p>
          <h4 class="text-uppercase font-weight-light">Lorem ipsum dolor.</h4>
          <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto debitis qui numquam. Minima, dolorum, a architecto assumenda quaerat eligendi quidem.</p>
        </div>
        <div class="col-md-4">
          <div class="text-info h1">
            <i class="fas fa-battery-three-quarters"></i>
          </div>
          <p class="text-muted">Lorem ipsum dolor sit.</p>
          <h4 class="text-uppercase font-weight-light">Lorem ipsum dolor.</h4>
          <p class="font-weight-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto debitis qui numquam. Minima, dolorum, a architecto assumenda quaerat eligendi quidem.</p>
        </div>
      </div>
    <!--tres columnas-->
    <hr>
    <!--Portafolio-->
    
    <h3 class="text-center mt-5 text-uppercase font-weight-light">Nuestro Portafolio</h3>
    <div class="row my-5">
      
      <div class="col-md-4">
        <div class="border-0">
          <img src="<?=RUTA_URL?>public/img/tarjeta.jpg" alt="" class="rounded img-fluid">
        </div>
        <p>Lorem ipsum dolor sit.</p>
      </div>
      <div class="col-md-4">
         <div class="border-0">
            <img src="<?=RUTA_URL?>public/img/tarjeta.jpg" alt="" class="rounded img-fluid">
          </div>
          <p>Lorem ipsum dolor sit.</p>
      </div>
      <div class="col-md-4">
         <div class="border-0">
            <img src="<?=RUTA_URL?>public/img/tarjeta.jpg" alt="" class="rounded img-fluid">
          </div>
          <p>Lorem ipsum dolor sit.</p>
      </div>
    </div><!--Portafolio-->
    
    <hr>
    <!--Testimonios-->
    <h3 class="text-center mt-5 text-uppercase font-weight-light mb-5">Testimonios</h3>
      <div id="carouselTestimonios" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselTestimonios" data-slide-to="0" class="active bg-secondary"></li>
          <li data-target="#carouselTestimonios" data-slide-to="1" class="bg-secondary"></li>
          <li data-target="#carouselTestimonios" data-slide-to="2" class="bg-secondary"></li>
        </ol>
        <div class="carousel-inner text-center">
          <div class="carousel-item active my-5">
            <h5>Lorem ipsum dolor sit amet.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore quidem quisquam consectetur accusantium placeat. Cum.</p>
          </div>
          <div class="carousel-item text-center my-5">
            <h5>Lorem ipsum dolor sit amet.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </div>
          <div class="carousel-item text-center my-5">
            <h5>Lorem ipsum dolor sit amet.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, repellendus eius doloribus laudantium.</p>
          </div>
        </div>
      </div>
    <!--Testimonios-->
    
    <hr>
    <!--Footer-->
    <div class="row justify-content-between text-center">
      <div class="col-md-4 text-md-left">
        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quae minima maiores ipsum laboriosam. Accusamus?</p>
      </div>
      <div class="col-md-4 text-md-right">
        <div class="">
          <i class="h5 fab fa-facebook-square"></i>
          <i class="h5 fab fa-google-plus-square"></i>
          <i class="h5 fab fa-twitter"></i>
        </div>
      </div>
    </div>
    <!--Footer-->
    </div>
    
    
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>