<?php
include_once 'config/constantes.php';
?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Actualizar datos</li>
  </ol>
</nav>

<div class="row mt-5 justify-content-center">
	<div class="col-xl-4">
		<form action="<?= URL_BASE ?>url=usuarios/save" method="POST">
			<div class="form-group">
		    	<label for="input-nombre">Nombre</label>
		    	<input type="text" class="form-control" id="input-nombre" name="nombre" placeholder="Nombre" value="<?= $usuario->nombre?>">
		  	</div>
		  	<div class="form-group">
		    	<label for="input-apellido">Apellido</label>
		    	<input type="text" class="form-control" id="input-apellido" name="apellido" placeholder="Apellido" value="<?= $usuario->apellido ?>">
		  	</div>
		  	<div class="form-group">
			    <label for="input-direccion">Example textarea</label>
			    <textarea class="form-control" id="input-direccion" name="direccion" rows="3"><?= $usuario->direccion ?></textarea>
			</div>
		  	<div class="form-group">
		  	  	<label for="exampleInputEmail1">Email address</label>
		  	  	<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" value="<?= $usuario->email ?>">
		  	</div>
		  	<div class="form-group">
		  	  	<label for="exampleInputPassword1">Actualizar Password</label>
		  	  	<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Actualizar</button>
		</form>
	</div>
</div>