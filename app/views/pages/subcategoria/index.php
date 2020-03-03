<?php require RUTA_APP . '/views/inc/header.php';?>



<div class="container">
  <h1 style="text-align: center;">Suc-Categorias</h1>
  <div class="row">
  <?php foreach($datos['subcategoria'] as $index =>$sub): ?>
  
  <div class="ml-5 col-md-3 card" style="">
    <div class="card-body">
      <h5 class="card-title"><?=$sub->subcategoria_nombre?></h5>
      <a href="<?= RUTA_URL?>productos/<?= $sub->subcategoria_id?>" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
  <?php endforeach;?>

  </div>
</div>


<?php require RUTA_APP . '/views/inc/footer.php';?>
