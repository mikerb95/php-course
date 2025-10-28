<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<div class="container my-5">
<h1>Agregar Empleado</h1>

<form action="<<?php echo base_url('producto/guardar'); ?>" method="post" class="p-4 border shadow-sm bg-light">
<div class="mb-3">
    <label class="form-label">Cedula del empleado:</label>
    <input type="Number" name="cedula" required class="form-control" placeholder="Ej: 12345678">
</div>
<div class="mb-3">
    <label class="form-label">Nombre del empleado:</label>
    <input type="text" name="nombre" required class="form-control" placeholder="Ej: Juan">
</div>
<div class="mb-3">
    <label class="form-label">Apellidos del empleado:</label>
    <input type="text" name="apellidos" required class="form-control" placeholder="Ej: Perez">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success">Agregar</button>
</div>
</form>
</div>
<?php echo $this->endSection();?>