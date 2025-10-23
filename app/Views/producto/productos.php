<?php echo $this->extend('plantilla/layout') ?>
<?php echo $this->section('contenido') ?>

<div class="container my-5">
    <h1 class="text-center mb-5">Listado de Productos</h1>
    <div class="table-responsive">
        <table class="table align-middle table-bordered table-striped table-hover shadow">
            <thead class="table-primary">
                <tr>
                    <th>Nombre producto</th>
                    <th>Cantidad almacen</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Borrador</td>
                    <td>100</td>
                    <td>$200</td>
                </tr>
                <tr>
                    <td>Cuaderno</td>
                    <td>500</td>
                    <td>$3000</td>
        </table>

        <?php echo $this->endSection() ?>