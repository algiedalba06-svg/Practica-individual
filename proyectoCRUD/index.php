<?php

require 'includes/funciones.php';

$resultado = obtenerReservaciones();

?>

<!DOCTYPE html>
<html lang="es">

<head>

<meta charset="UTF-8">
<title>Sistema de Reservaciones</title>

<link rel="stylesheet" href="build/css/style.css">

</head>

<body>

<div class="container">

<img src="build/img/logo.png" class="logo">

<h1>Sistema de Reservaciones del Hotel</h1>

<a href="crear.php" class="btn btn-crear">Nueva Reservación</a>


<div class="tabla-responsive">

<table>

<thead>

<tr>
<th>ID</th>
<th>Cliente</th>
<th>Teléfono</th>
<th>Habitación</th>
<th>Entrada</th>
<th>Salida</th>
<th>Acciones</th>
</tr>

</thead>

<tbody>

<?php while($row = $resultado->fetch_assoc()): ?>

<tr>

<td><?php echo $row['id']; ?></td>
<td><?php echo $row['cliente']; ?></td>
<td><?php echo $row['telefono']; ?></td>
<td><?php echo $row['habitacion']; ?></td>
<td><?php echo $row['fecha_entrada']; ?></td>
<td><?php echo $row['fecha_salida']; ?></td>

<td class="acciones">

<a class="btn btn-editar" href="editar.php?id=<?php echo $row['id']; ?>">
Editar
</a>

<a class="btn btn-eliminar"
onclick="return confirm('¿Seguro que deseas eliminar esta reservación?')"
href="eliminar.php?id=<?php echo $row['id']; ?>">
Eliminar
</a>

</td>

</tr>

<?php endwhile; ?>

</tbody>

</table>

</div>

</div>

</body>

</html>