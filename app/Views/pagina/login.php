<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
<div class="container my-5">
<h1>Iniciar Sesión</h1>
<?php if(session('mensaje')):?>
    <div class="alert alert-danger"><?= session('mensaje'); ?></div>
<?php endif;?>    
<form action="<?= base_url('/login/acceder')?>" method="post" class="p-4 border shadow-sm bg-light">
<div class="mb-3">
    <label class="form-label">Nombre de Usuario:</label>
    <input type="text" name="usuario" required class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Contraseña:</label>
    <input type="password" name="password" required class="form-control">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success">Ingresar</button>
</div>
</form>
</div>
</body>
</html>