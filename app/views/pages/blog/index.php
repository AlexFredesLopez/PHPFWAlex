<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
      .subir{
        margin-top: -50px;
      }
    </style>
  </head>
  <body>
    <div class="container-fluid bg-primary fixed-top">
       <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
          <a class="navbar-brand" href="<?=RUTA_URL?>blog">Mi Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <a class="btn btn-outline-dark text-white border-white my-2 my-sm-0" type="submit">Facebook</a>
            </form>
          </div>
        </nav>
    
    </div> <!--Navbar-->
    
    
    <!--SISTEMA Columna-->
    <div class="container-fluid mt-5 pt-5">
      
      <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-3">
          <div class="card">
            <img src="<?=RUTA_URL?>public/img/1.jpg" class="card-img-top" alt="...">
            <div class="text-center subir img-fluid img-responsive">
              <img src="<?=RUTA_URL?>public/img/rana.jpg" class="rounded-circle border" alt="..." width="100px;">
            </div>
            <div class="card-body text-center">
              <h6 class="card-title">Card title</h6>
              <p class="card-text lead">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
          <div class="card mt-3">
            <div class="card-header">
              Quote
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-8 col-md-8 col-lg-9">
          
         <div class="card mr-sm-3 mt-3 mt-sm-0">
          <ul class="list-group list-group-flush">
            <li class="list-group-item">
              <!--Articulo-->
              <div class="row my-3">
                <div class="col-2 col-sm-3 col-lg-1">
                  <img src="<?=RUTA_URL?>public/img/rana.jpg" class="rounded-circle border" alt="..." width="60px;">
                </div>
                <div class="col-10 col-sm-9 col-lg-11 lead">
                  <p class="card-text float-right"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <h6 class="font-wight-bold">Lorem ipsum.</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, saepe, labore, odio, blanditiis voluptatibus animi ratione quis atque quo magni fugit laudantium quidem esse ab assumenda doloremque enim sapiente optio at quasi. Numquam, consectetur, enim, iure, quaerat accusantium non quia ut quos doloremque odit a esse aliquid quo aliquam excepturi.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, saepe, labore, odio, blanditiis voluptatibus animi ratione quis atque quo magni fugit laudantium quidem esse ab assumenda doloremque enim sapiente optio at quasi. Numquam, consectetur, enim, iure, quaerat accusantium non quia ut quos doloremque odit a esse aliquid quo aliquam excepturi.</p>
                  <button class="btn btn-outline-primary">Más Información</button>
                </div>
              </div><!--Articulo-->
            </li>
            <li class="list-group-item">
              <!--Articulo-->
              <div class="row my-3">
                <div class="col-2 col-sm-3 col-lg-1">
                  <img src="<?=RUTA_URL?>public/img/rana.jpg" class="rounded-circle border" alt="..." width="60px;">
                </div>
                <div class="col-10 col-sm-9 col-lg-11 lead">
                  <p class="card-text float-right"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <h6 class="font-wight-bold">Lorem ipsum.</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, saepe, labore, odio, blanditiis voluptatibus animi ratione quis atque quo magni fugit laudantium quidem esse ab assumenda doloremque enim sapiente optio at quasi. Numquam, consectetur, enim, iure, quaerat accusantium non quia ut quos doloremque odit a esse aliquid quo aliquam excepturi.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, saepe, labore, odio, blanditiis voluptatibus animi ratione quis atque quo magni fugit laudantium quidem esse ab assumenda doloremque enim sapiente optio at quasi. Numquam, consectetur, enim, iure, quaerat accusantium non quia ut quos doloremque odit a esse aliquid quo aliquam excepturi.</p>
                  <button class="btn btn-outline-primary">Más Información</button>
                </div>
              </div><!--Articulo-->
            </li>
            <li class="list-group-item">
              <!--Articulo-->
              <div class="row my-3">
                <div class="col-2 col-sm-3 col-lg-1">
                  <img src="<?=RUTA_URL?>public/img/rana.jpg" class="rounded-circle border" alt="..." width="60px;">
                </div>
                <div class="col-10 col-sm-9 col-lg-11 lead">
                  <p class="card-text float-right"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <h6 class="font-wight-bold">Lorem ipsum.</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, saepe, labore, odio, blanditiis voluptatibus animi ratione quis atque quo magni fugit laudantium quidem esse ab assumenda doloremque enim sapiente optio at quasi. Numquam, consectetur, enim, iure, quaerat accusantium non quia ut quos doloremque odit a esse aliquid quo aliquam excepturi.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, saepe, labore, odio, blanditiis voluptatibus animi ratione quis atque quo magni fugit laudantium quidem esse ab assumenda doloremque enim sapiente optio at quasi. Numquam, consectetur, enim, iure, quaerat accusantium non quia ut quos doloremque odit a esse aliquid quo aliquam excepturi.</p>
                  <button class="btn btn-outline-primary">Más Información</button>
                </div>
              </div><!--Articulo-->
            </li>
          </ul>
        </div>
        </div>
      </div>
    </div><!--SISTEMA Columna-->
    
    
    <!--Footer-->
    
    <footer class=" container-fluid text-center text-white bg-dark mt-3 py-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, vel!</p>
    </footer>
    <!--Footer-->
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>