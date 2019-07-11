<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Perfil</li>
  </ol>
</nav>
<div class="row mt-5">
  <div class="col-sm-12">
    <a href="<?= URL_BASE ?>url=usuarios/editar" type="button" class="btn btn-primary">Editar</a>
  </div>
</div>
<div class="row mt-5">
  <div class="col-sm-12">
    <table border="1">
      <tr>
        <th>Nombre</th>
        <td><?= $usuario->nombre ?></td>
      </tr>
      <tr>
        <th>Apellido</th>
        <td><?= $usuario->apellido ?></td>
      </tr>
      <tr>
        <th>Dirección</th>
        <td><?= $usuario->direccion ?></td>
      </tr>
      <tr>
        <th>Correo</th>
        <td><?= $usuario->email ?></td>
      </tr>
    </table>
  </div>
</div>
