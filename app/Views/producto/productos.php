<?php echo $this->extend('plantilla/layout') ?>
<?php echo $this->section('contenido') ?>

<div class="container my-5">
    <h1 class="text-center mb-5">Listado de Productos</h1>
    <div class="table-responsive">

        <table class="table align-middle table-bordered table-striped table-hover shadow text-center"> <!-- table-bordered agrega bordes a la tabla, table-striped agrega rayas, table-hover resalta la fila al pasar el mouse, text-center centra el texto -->
        
            <thead class="table-primary"> <!-- table-primary agrega color de fondo azul claro -->
                <tr>
                    <th>Codigo de barras</th>
                    <th>Cantidad almacen</th>
                    <th>Cantidad en almacen</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto->codigo_barra; ?></td> // Acceder a la propiedad codigo_barra del objeto producto
                    <td><?php echo $producto->cantidad_almacen; ?></td> // Acceder a la propiedad cantidad_almacen del objeto producto
                    <td><?php echo $producto->cantidad_en_almacen; ?></td> // Acceder a la propiedad cantidad_en_almacen del objeto producto
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php echo $this->endSection() ?>