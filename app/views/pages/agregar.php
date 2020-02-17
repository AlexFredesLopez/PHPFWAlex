<?php require RUTA_APP . '/views/inc/header.php';?>

<a href="<?php echo RUTA_URL?>paginas" class="btn btn-light"><i class="fa fa-backward"></i>Volver</a>
<div class="card card-body bg-light mt-5">
  <h2>Agregar USuarios</h2>
  
  <form action="<?php echo RUTA_URL?>paginas/agregar" method="POST">
    <div class="form-group"> 
      <label for="nombre"> Nombre: <sup>*</sup></label>
      <input type="text" name="nombre" class="form control">
      
      <label for="email"> Email: <sup>*</sup></label>
      <input type="email" name="nombre" class="form control">

      <label for="telefono"> telefono: <sup>*</sup></label>
      <input type="text" name="telefono" class="form control">
      
      <input type="submit" class="btn btn-success" value="agregar Usuario">
      
    </div>
  </form>
</div>
<?php require RUTA_APP . '/views/inc/footer.php';?>

