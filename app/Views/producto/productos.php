<?php echo $this->extend('plantilla/layout') ?>
<?php echo $this->section('contenido') ?>
<h1>Lista de Productos</h1>
<table>
    <thead>
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

