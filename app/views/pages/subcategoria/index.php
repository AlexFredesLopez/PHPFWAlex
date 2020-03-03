<?php require RUTA_APP . '/views/inc/header.php';?>


<ul>
  <?php foreach($datos['subcategoria'] as $index =>$sub): ?>
  <li><a href="<?= RUTA_URL?>productos/<?= $sub->subcategoria_id?>"><?=$sub->subcategoria_nombre?></a></li>
  <?php endforeach;?>
</ul>


<?php require RUTA_APP . '/views/inc/footer.php';?>
