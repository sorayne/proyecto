<?php
include_once 'config/constantes.php';
?>
<div class="row">
  <div class="col-md-12 col-sm-12">
    <h1>Registrar publicación</h1>
    <form action="<?= URL_BASE ?>url=publicaciones/save" method="POST">
      <div class="form-group">
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" value="" class="form-control">
      </div>
      <div class="form-group">
        <label for="texto">Texto</label>
        <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
      </div>
      <button type="submit" name="button" class="btn btn-primary">Guardar</button>
    </form>
  </div>
</div>
