<?php require RUTA_APP . '/views/inc/header.php';?>


<div class="container">
  <h1 style="text-align: center;">Productos</h1>
  <div class="row">
  <?php foreach($datos['productos'] as $index => $prod): ?>
  
  <div class="ml-5 mt-3 col-md-3 card" style="display: flex;    flex-wrap: wrap;">
    <div class="card-body">
      <h5 class="card-title"><?=$prod->producto_nombre?></h5>
    </div>
  </div>
  <?php endforeach;?>

  </div>
</div>



<?php require RUTA_APP . '/views/inc/footer.php';?>
