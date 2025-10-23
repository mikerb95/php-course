<?php echo $this->extend('plantilla/layout') ?>
<?php echo $this->section('contenido') ?>

<h1>Agregar Producto</h1>
<form action="" method="post">
    <div>
        <label for="nombre">Nombre del producto:</label>
        <input type="text" name="nombrepro" required>
 
    </div>
    <div>
        <label for="Cantidad">Cantidadpro:</label>
    </div>
    <div>
        <input type="number" name="preciopro" required>
    </div>
    <div>
        <button type="submit">Agregar</button>
    </div>

</form>

<?php echo $this->endSection(); ?>