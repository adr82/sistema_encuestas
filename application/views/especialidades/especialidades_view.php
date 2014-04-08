<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Especialidades</title>
    <script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
</head>
<body>


<h1>Especialidades</h1>

<?php foreach($especialidades as $especialidad): ?>
    <h2><?php  print $especialidad->nombre;  ?></h2>
<?php endforeach; ?>
</body>
</html>