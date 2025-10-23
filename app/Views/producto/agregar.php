<?php echo $this->extend('plantilla/layout') ?>
<?php echo $this->section('contenido') ?>

<h1>Agregar Producto</h1>
<form action="" method="post" class="p-4 border shadow-sm bg-light">
    <div class="mb-3">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" name="nombrepro" required class="form-control" placeholder="Ingrese el nombre ej: cuaderno">
 
    </div>
    <div>
        <label for="cantidad">Cantidadpro:</label>
        <input type="number" name="cantidadpro" required>
    </div>
    <div>
        <input type="number" name="preciopro" required>
    </div>
    <div>
        <button type="submit">Agregar</button>
    </div>

</form>

<?php echo $this->endSection(); ?>