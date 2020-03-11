    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo RUTA_URL?>/css/styles.css"/>
    <title><?php echo NOMBRE_SITIO;?></title>
  </head>
  <body>
    
    <!--NAVBAR-->
    <div class="navbar-dark bg-primary fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary container-fluid">
     <a class="navbar-brand" href="#">
      <img src="https://getbootstrap.com/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" alt="">
    </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-5">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <span class="navbar-text text-white">
          +555 5555 5555
        </span>
      </div>
    </nav>
    </div>
    
    <!--NAVBAR-->
    
    
    <!--CARROUSEL-->
    
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?=RUTA_URL?>public/img/1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Titulo 1</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, ea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?=RUTA_URL?>public/img/2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Titulo 2</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, ea.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="<?=RUTA_URL?>public/img/3.jpeg" class="d-block w-100" alt="...">
           <div class="carousel-caption d-none d-md-block">
            <h5>Titulo 3</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, ea.</p>
          </div>
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
    
    
    <!--CARROUSEL-->
    
    
    <!--SECCION 1-->
    <section class="container my-5">
      <h2 class="display-4 text-center lead">
        Lorem ipsum dolor.
      </h2>
      <p class="lead my-4 text-center text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, modi eum a optio excepturi facilis iusto ea repellendus laboriosam tenetur.</p>
      
      <!--CARD-->
        <div class="card-deck">
          <div class="row">
            <div class="card col-12 col-md-4 col-sm-6 mb-2">
            <img src="<?=RUTA_URL?>public/img/1.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <button class="btn btn-info">Más Información</button>
            </div>
          </div>
          <div class="card col-12 col-md-4 col-sm-6 mb-2">
            <img src="<?=RUTA_URL?>public/img/2.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
             <button class="btn btn-info">Más Información</button>
            </div>
          </div>
          <div class="card col-12 col-md-4 mb-2">
            <img src="<?=RUTA_URL?>public/img/3.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              <button class="btn btn-info">Más Información</button>
            </div>
          </div>
          </div>
        </div>
      <!--CARD-->
    </section>
    <!--SECCION 1-->
    
    
    <!--Jumbotron-->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-4">Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
      </div>
    
    
    <!--Jumbotron-->
    
    
    
    <!--SECTION 2-->
    <section class="container my-5">
      <h2 class="display-4 text-center lead">
        Lorem ipsum dolor.
      </h2>
      <p class="lead my-4 text-center text-info">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic, modi eum a optio excepturi facilis iusto ea repellendus laboriosam tenetur.</p>
      
      <div class="row">
        <div class="col-md-6">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header bg-info rounder-0" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Collapsible Group Item #1
                  </button>
                </h2>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-info rounder-0" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Collapsible Group Item #2
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header bg-info rounder-0" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Collapsible Group Item #3
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-md-6">
          <img src="<?=RUTA_URL?>public/img/2.jpg" alt="" class="img-fluid">
          <ul class="list-group">
            <li class="list-group-item active bg-info rounded-0 border-info">Cras justo odio</li>
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </section>
    
    <!--SECTION 2-->
    
    
    <footer class="bg-dark text-white mt-5 py-4 text-center">
      <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fugit, possimus, voluptatem, eligendi eveniet labore deleniti veritatis quasi excepturi animi minima voluptas unde totam! Neque numquam voluptatem ratione saepe tenetur!</p>
      </div>
    </footer>
    
<!--    <div class="container">
     
      <div class="alert alert-info" role="alert">
        A simple info alert—check it out!
      </div>
      <div class="alert alert-dark" role="alert">
        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you like.
      </div>
      <div class="bg-dark py-5 text-center">
        <a href="" class="bg-warning text-dark p-2 lead">Logo Corporativo</a>
      </div>
      
      <div class="bg-warning text-center py-5">
        <h1 class="display-4 pt-5">Lorem ipsum dolor.</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, nobis.</p>
        
        <div class="pb-5 pt-2">
          <a href="" class="bg-dark text-warning p-2">Contáctame</a>
        </div>
      </div>
      
      <div class="row py-5">
        <div class="col-md-4">
          <h3>Lorem ipsum dolor.</h3>
          <hr>
          <img src="<?=RUTA_URL?>public/img/images.jpeg" alt="" class="img-fluid rounded">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, omnis, soluta quam totam culpa animi doloribus ex incidunt eum reprehenderit.</p>
        </div>
        <div class="col-md-4">
          <h3>Lorem ipsum dolor.</h3>
          <hr>
          <img src="<?=RUTA_URL?>public/img/images.jpeg" alt="" class="img-fluid rounded">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, omnis, soluta quam totam culpa animi doloribus ex incidunt eum reprehenderit.</p>
        </div>
        <div class="col-md-4">
          <h3>Lorem ipsum dolor.</h3>
          <hr>
          <img src="<?=RUTA_URL?>public/img/images.jpeg" alt="" class="img-fluid rounded">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, omnis, soluta quam totam culpa animi doloribus ex incidunt eum reprehenderit.</p>
        </div>
      </div>
      
      <footer class="bg-dark text-center py-4">
        <a href="" class="text-white">Todos los derechos reservados</a>
      </footer>
    </div>-->
    
    
    
<!--     <nav class="navbar navbar-dark bg-dark">
       <a href="<?=RUTA_URL?>"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/1200px-HTML5_logo_and_wordmark.svg.png" alt="" width="30" height="30"></a>
       <ul class="nav justify-content-end bg-dark">
      <li class="nav-item justify-content-end">
        <a class="nav-link active" href="<?= RUTA_URL?>categorias">Categorias</a>
      </li>
    </ul>