<?php
session_start();
include_once 'config/Router.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Publicaciones</title>
    <link rel="stylesheet" href="assets/bootstrap-4.3.1-dist/css/bootstrap.min.css">
  </head>
  <body>
<!-- <?php require_once 'views/layouts/header.php'; ?> -->
    <?php require_once 'views/layouts/navbar.php'; ?>
    <div role="main" class="container my-5">
      <?php $router = new Router(); ?>
    </div>
  </body>
</html>
