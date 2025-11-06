<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<div class="container my-5">
<h1>Agregar Productos</h1>

<form action="" method="post" class="p-4 border shadow-sm bg-light">
<div class="mb-3">
    <label class="form-label">Nombre del producto:</label>
    <input type="text" name="nombrepro" required class="form-control" placeholder="Ej: Cuaderno">
</div>
<div class="mb-3">
    <label class="form-label">Cantidad:</label>
    <input type="number" name="cantidadpro" required class="form-control">
</div>
<div class="mb-3">
    <label class="form-label">Precio:</label>
    <input type="number" name="preciopro" required class="form-control">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success">Agregar</button>
</div>
</form>
</div>
<?php echo $this->endSection();?>