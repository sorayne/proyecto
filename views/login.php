<?php
include_once 'config/constantes.php';
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Iniciar sesión</li>
  </ol>
</nav>

<div class="row mt-5 justify-content-center">
	<div class="col-xl-4">
		<form action="<?= URL_BASE ?>url=auth/login" method="POST">
		  	<div class="form-group">
		  	  	<label for="exampleInputEmail1">Correo</label>
		  	  	<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Ingrese su correo">
		  	</div>
		  	<div class="form-group">
		  	  	<label for="exampleInputPassword1">Contraseña</label>
		  	  	<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Ingrese su contraseña">
		  	</div>
		  	<button type="submit" class="btn btn-primary">Login</button>
		</form>
	</div>
</div>