<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?= URL_BASE ?>url=home/index">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php if (!empty($_SESSION['usuario'])): ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_BASE ?>url=usuarios/publicaciones">Mis publicaciones</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_BASE ?>url=usuarios/ver">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_BASE ?>url=auth/logout">Salir</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_BASE ?>url=auth/login">Entrar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= URL_BASE ?>url=register/index">Registrarse</a>
          </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
