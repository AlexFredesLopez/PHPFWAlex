<?php require RUTA_APP . '/views/inc/header.php';?>

<h1 style="text-align: center;">Categorias</h1>

<div class="container">
  <div class="row">
  <?php 
    foreach ($datos['categorias'] as $index => $cat):
  ?>
  
  <div class="ml-5 col-md-3 card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title"><?= $cat->categoria_nombre;?></h5>
      <p class="card-text"><?= $cat->categoria_descripcion; ?></p>
      <a href="<?php echo RUTA_URL?>categorias/<?php echo $cat->categoria_id?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  
  <?php endforeach;?>
</div>
</div>
<?php require RUTA_APP . '/views/inc/footer.php';?>
