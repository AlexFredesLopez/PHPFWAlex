<?php require RUTA_APP . '/views/inc/header.php';?>

<a href="<?php echo RUTA_URL?>pages" class="btn btn-light"><i class="fa fa-backward"></i>Volver</a>
<div class="card card-body bg-light mt-5">
  <h2>Editar USuarios</h2>
  
  <form action="<?php echo RUTA_URL?>pages/editar/<?php echo $datos['usuario_id']?>" method="POST">
    <div class="form-group"> 
      <label for="nombre"> Nombre: <sup>*</sup></label>
      <input type="text" name="nombre" value="<?php echo $datos['nombre'] ?>" class="form control">
      
      <label for="email"> Email: <sup>*</sup></label>
      <input type="email" name="email" value="<?php echo $datos['email'] ?>" class="form control">

      <label for="telefono"> telefono: <sup>*</sup></label>
      <input type="text" name="telefono"  value="<?php echo $datos['telefono'] ?>" class="form control">
      
      <input type="submit" class="btn btn-success" value="Editar Usuario">
      
    </div>
  </form>
</div>
<?php require RUTA_APP . '/views/inc/footer.php';?>

