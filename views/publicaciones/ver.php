<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Ver publicación</li>
  </ol>
</nav>

<div class="row mt-5">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?= $publicacion->titulo ?></h5>
        <p class="card-text"><?= $publicacion->texto ?></p>
        <small class="text-right">Fecha: <?= $publicacion->fecha ?></small>
      </div>
      <?php if( isset($_SESSION['usuario']) ){?>
        <?php if( $_SESSION['usuario']->id == $publicacion->usuario_id ){?>
        <div class="btn-group">
          <a class="btn btn-sm btn-warning" href="<?= URL_BASE ?>url=publicaciones/editar&id=<?= $publicacion->id ?>">Editar</a>
          <a class="btn btn-sm btn-danger" href="<?= URL_BASE ?>url=publicaciones/eliminar&id=<?= $publicacion->id ?>">Eliminar</a>
        </div>
          <?php } ?>
        <?php } ?>
    </div>
  </div>
</div>

