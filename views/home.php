<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Inicio</li>
  </ol>
</nav>
<?php if( isset($_SESSION['usuario']) ){?>
	<div class="row mt-5">
		<div class="col-sm-12">
			<a href="<?= URL_BASE ?>url=publicaciones/agregar" type="button" class="btn btn-primary">Nueva publicación</a>
		</div>
	</div>
<?php } ?>
<div class="row mt-5">
<?php
if($publicaciones->num_rows != 0){
	while ($publicacion = $publicaciones->fetch_object()) {
?>
    <div class="col-sm-12 col-md-8 offset-md-2 col-xl-8 offset-xl-2 mt-2 mb-2">
	    <div class="card">
			<div class="card-header">
				<?= $publicacion->nombre ?> <?= $publicacion->apellido ?>
			</div>
			<div class="card-body">
				<h5 class="card-title"><?= $publicacion->titulo ?></h5>
				<p class="card-text"><?= $publicacion->texto ?></p>
				<small class="text-right">Fecha: <?= $publicacion->fecha ?></small>
			</div>
			
			<?php if( isset($_SESSION['usuario']) ){?>
				<?php if( $_SESSION['usuario']->id == $publicacion->usuario_id ){?>
	    	<div class="btn-group">
			<a class="btn btn-sm btn-info" href="<?= URL_BASE ?>url=publicaciones/ver&id=<?= $publicacion->id ?>">Ver</a>
	    		<a class="btn btn-sm btn-warning" href="<?= URL_BASE ?>url=publicaciones/editar&id=<?= $publicacion->id ?>">Editar</a>
	    		<a class="btn btn-sm btn-danger" href="<?= URL_BASE ?>url=publicaciones/eliminar&id=<?= $publicacion->id ?>">Eliminar</a>
	    	</div>
	    		<?php } ?>
	    	<?php } ?>
		</div>
		<div class="card">
			<div class="card-footer">
				comentarios aqui
			</div>
		</div>
		<?php if( isset($_SESSION['usuario']) ){?>
		<div class="input-group mb-3">
			<input type="text" class="form-control" placeholder="Comentar esta publicación" aria-label="Comentar esta publicación" aria-describedby="button-addon2">
			<div class="input-group-append">
			<a type="button" class="btn btn-outline-success" href="<?= URL_BASE ?>url=publicaciones/agregar&id=<?= $publicacion->id ?>">Comentar</a>
			</div>
		</div>
		<?php } ?>
	</div>
    <?php
	}
}
?>
</div>