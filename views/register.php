<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Registrarse</li>
  </ol>
</nav>
<?php if (isset($validar)) {?>	
	<div class="col-sm-12 col-xl-12">
		<div class="alert alert-warning text-center" role="alert">
			<?= $validar?>
		</div>
	</div>
<?php } ?>

<div class="row mt-5 justify-content-center">
	<div class="col-xl-4">
		<form action="<?= URL_BASE ?>url=register/save" method="POST">
			<div class="form-group">
		    	<label for="input-nombre">Nombre</label>
		    	<input type="text" class="form-control" id="input-nombre" name="nombre" placeholder="Nombre">
		  	</div>
		  	<div class="form-group">
		    	<label for="input-apellido">Apellido</label>
		    	<input type="text" class="form-control" id="input-apellido" name="apellido" placeholder="Apellido">
		  	</div>
		  	<div class="form-group">
			    <label for="input-direccion">Dirección</label>
			    <textarea class="form-control" id="input-direccion" name="direccion" rows="3" placeholder="Dirección"></textarea>
			</div>
		  	<div class="form-group">
		  	  	<label for="exampleInputEmail1">Correo</label>
		  	  	<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Correo">
		  	</div>
		  	<div class="form-group">
		  	  	<label for="exampleInputPassword1">Contraseña</label>
		  	  	<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Contraseña">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Registrar</button>
		</form>
	</div>
</div>