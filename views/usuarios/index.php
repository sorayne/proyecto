<a class="btn btn-sm btn-primary" href="<?= URL_BASE ?>url=usuarios/agregar">Nuevo Usuario</a>
<a class="btn btn-sm btn-danger pull-right" href="<?= URL_BASE ?>url=usuarios/logout">Salir</a>
<table class="table table-striped table-hover table-responsive">
  <tr>
    <th>Id</th>
    <th>Nombreo</th>
    <th>Apellido</th>
    <th>Dirección</th>
    <th>Clave</th>
    <th>Acciones</th>
  </tr>
<?php
while ($usuario = $usuarios->fetch_object()) {
    ?>
    <tr>
      <td><?= $usuario->id ?></td>
      <td><?= $usuario->nombre ?></td>
      <td><?= $usuario->apellido ?></td>
      <td><?= $usuario->direccion ?></td>
      <td><?= $usuario->password ?></td>
      <td>
        <div class="btn-group">
          <a class="btn btn-sm btn-info" href="<?= URL_BASE ?>url=usuarios/ver&id=<?= $usuario->id ?>">Ver</a>
          <a class="btn btn-sm btn-warning" href="<?= URL_BASE ?>url=usuarios/editar&id=<?= $usuario->id ?>">Editar</a>
          <a class="btn btn-sm btn-danger" href="<?= URL_BASE ?>url=usuarios/eliminar&id=<?= $usuario->id ?>">Eliminar</a>
        </div>
      </td>
    </tr>
    <?php
}
?>
</table>
