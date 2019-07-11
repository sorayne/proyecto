<?php
include_once 'config/constantes.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Editar publicación</li>
  </ol>
</nav>

<div class="row">
  <div class="col-md-12 col-sm-12">
    <h1>Registrar publicación</h1>
    <form action="<?= URL_BASE ?>url=publicaciones/save" method="POST">
      <input type="hidden" name="id" value="<?= $publicacion->id?>">
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="<?= $publicacion->titulo ?>" class="form-control">
      </div>
      <div class="form-group">
        <label for="texto">Texto</label>
        <textarea class="form-control" id="texto" name="texto" rows="3"><?= $publicacion->texto ?></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
