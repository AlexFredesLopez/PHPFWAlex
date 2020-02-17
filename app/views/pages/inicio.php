<?php require RUTA_APP . '/views/inc/header.php';?>


<table class="table">
  <thead>
    <th>Id</th>
    <th>Nombre</th>
    <th>Email</th>
    <th>Telefono</th>
    <th>Acciones</th>
  </thead>
  
  
  <tbody>
  <?php foreach ($datos['usuarios'] as $key => $usuario):?>
    <tr>
      <td><?php echo $usuario->usuario_id;?></td>
      <td><?php echo $usuario->nombre;?></td>
      <td><?php echo $usuario->email;?></td>
      <td><?php echo $usuario->telefono;?></td>
      <td><a href="<?php echo RUTA_URL;?>paginas/editar/<?php echo $usuario->usuario_id;?>">Editar</a></td>
      <td><a href="<?php echo RUTA_URL;?>paginas/borrar/<?php echo $usuario->usuario_id;?>">Borrar</a></td>
      
    </tr>
  <?php endforeach;?>
  </tbody>
</table>
<?php require RUTA_APP . '/views/inc/footer.php';?>
