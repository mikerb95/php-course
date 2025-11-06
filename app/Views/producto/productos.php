<?php echo $this->extend('plantilla/layout');?>
<?php echo $this->section('contenido');?>
<div class="container my-5">
<h1 class="text-center mb-5">Listado de productos</h1>
<div class="table-responsive">
<table class="table table-striped table-hover table-bordered text-center align-middle shadow-sm">
    <thead class="table-primary">
        <tr>
            <th>Codigo de Barras</th>
            <th>Nombre Producto</th>
            <th>Cantidad en Almacén</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($productos as $producto):?>
        <tr>
            <td><?php echo $producto->codigo_barra;?></td>
            <td><?php echo $producto->nombre_pro;?></td>
            <td><?php echo $producto->stock_pro;?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</div>
</div>
<?php echo $this->endSection();?>