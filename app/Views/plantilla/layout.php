<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php echo $this->include('plantilla/menu'); ?> <!-- Menu -->
    <br><br>
    <? echo $this->renderSection('contenido'); ?> <!-- Contenido Dinamico -->
    <br>
    <?php echo $this->include('plantilla/footer'); ?> <!-- Footer -->
</body>
</html>