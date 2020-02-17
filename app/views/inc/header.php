<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="with=device=width, initial-sacale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="id=edge"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA_URL?>/css/styles.css"/>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title><?php echo NOMBRE_SITIO;?></title>
  </head>
  <body>

    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-inverse bg-dark mb-3">
       <a class="navbar-brand" href="#">Navbar w/ text</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
       </button>
        <a href="<?php echo RUTA_URL?>" class="navbar-brand"> CRUD MVC</a>
         <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo RUTA_URL?>paginas/agregar">Insertar <span class="sr-only"></span></a>
            </li>
          </ul>
         </div>
      </nav>
      
    