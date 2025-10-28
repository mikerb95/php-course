<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>

<div class="container my-5">
<h2>EMPLEADOS</h2>
<br>
<a href="<?php echo base_url('/empleados/crear');?>" 
        class="btn btn-success">Agregar Nuevo empleado</a>
<br><br>
<table class="table table-striped table-hover table-bordered text-center align-middle shadow-sm">
    <thead>
        <tr>
            <th>Cedula Empleado</th>
            <th>Nombre Empleado</th>
            <th>Apellido Empleado</th>
            <th>Correo Empleado</th>
            <th>Dirección Empleado</th>
            <th>Telefono Empleado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($empleados as $emp): ?>
        <tr>
            <td><?php echo $emp['ced_empleado'];?></td>
            <td><?php echo $emp['nombre_emp'];?></td>
            <td><?php echo $emp['apellido_emp'];?></td>
            <td><?php echo $emp['email_emp'];?></td>
            <td><?php echo $emp['direccion_emp'];?></td>
            <td><?php echo $emp['telefono_emp'];?></td>
            <td>
                <a href="<?php echo base_url('/empleados/editar/'.$emp['ced_empleado']);?>" 
                class="btn btn-warning">Editar Empleado</a>

                <a href="<?php echo base_url('/empleados/eliminar/'.$emp['ced_empleado']);?>" 
                class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php echo $this->endSection();?>