
<div class="container">
  <h2>Lista de registro</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>#</th>
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th><center>Acciones</center></th>
      </tr>
    </thead>
    <tbody>
        <?php #var_dump($preregistro); ?>
        <?php foreach($preregistros as $row) { ?>
            <tr>
                <td><?php echo $row['id_preregistro']; ?></td>
                <td style="text-transform:uppercase;"><?php echo $row['nombre']; ?></td>
                <td style="text-transform:uppercase;"><?php echo $row['apaterno']; ?></td>
                <td style="text-transform:uppercase;"><?php echo $row['amaterno']; ?></td>
                <td><?php echo $row['correo']; ?></td>
                <td><a style="text-align:center;" href="<?php echo base_url('welcome/actualizar').'/'.$row['id_preregistro']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="<?php echo base_url('Welcome/eliminar').'/'.$row['id_preregistro']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
            </tr>
        <?php } ?>
    </tbody>
  </table>
</div>

