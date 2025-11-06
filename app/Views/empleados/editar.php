<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<div class="container my-5">
<h1>Editar Empleado</h1>

<form action="<?= base_url('/empleados/actualizar/'.$empleado['ced_empleado']);?>" 
        method="post" class="p-4 border shadow-sm bg-light">
<div class="mb-3">
    <label class="form-label">Cedula del Empleado:</label>
    <input type="number" name="ced_empleado" required class="form-control"
         value="<?php echo $empleado['ced_empleado'];?>" readonly>
</div>
<div class="mb-3">
    <label class="form-label">Nombre Empleado:</label>
    <input type="text" name="nombre_emp" required class="form-control"
    value="<?= $empleado['nombre_emp'];?>">
</div>
<div class="mb-3">
    <label class="form-label">Apellidos Empleado:</label>
    <input type="text" name="apellido_emp" required class="form-control"
    value="<?= $empleado['apellido_emp'];?>">
</div>
<div class="mb-3">
    <label class="form-label">Correo Empleado:</label>
    <input type="text" name="email_emp" required class="form-control"
    value="<?= $empleado['email_emp'];?>">
</div>
<div class="mb-3">
    <label class="form-label">Dirección Empleado:</label>
    <input type="text" name="direccion_emp" required class="form-control"
    value="<?= $empleado['direccion_emp'];?>">
</div>
<div class="mb-3">
    <label class="form-label">Telefono Empleado:</label>
    <input type="number" name="telefono_emp" required class="form-control"
    value="<?= $empleado['telefono_emp'];?>">
</div>
<div class="text-center">
    <button type="submit" class="btn btn-success">Actualizar</button>
</div>
</form>
</div>
<?php echo $this->endSection();?>