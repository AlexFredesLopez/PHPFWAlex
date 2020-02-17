<?php

// Para redireccionar la pagina

function redireccionar($pagina){
  header("Location:". 'localhost/'. RUTA_URL.$pagina);
}