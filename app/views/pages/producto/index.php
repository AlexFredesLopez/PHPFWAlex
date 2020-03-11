<?php require RUTA_APP . '/views/inc/header.php';?>


<!--<div class="container">
  <h1 style="text-align: center;">Productos</h1>
  <div class="row">
  <?php foreach($datos['productos'] as $index => $prod): ?>
  
  <div class="ml-5 mt-3 col-md-3 card" style="display: flex;    flex-wrap: wrap;">
    <div class="card-body">
      <h5 class="card-title"><?=$prod->producto_nombre?></h5>
    </div>
    
    
    <form action="<?php echo RUTA_URL?>productos/agregar/<?=$prod->subcategoria_id?>" method="POST">
      <input type="hidden" name="id" value="<?=$prod->producto_id?>">
      <input type="hidden" name="name" value="<?=$prod->producto_nombre?>">
      <input type="hidden" name="qty" value="1">
      <input type="hidden" name="price" value="100">
      <input type="submit" value="agregar producto">
    </form>
  </div>
  <?php endforeach;?>

  </div>
</div>-->



<?php require RUTA_APP . '/views/inc/footer.php';?>
