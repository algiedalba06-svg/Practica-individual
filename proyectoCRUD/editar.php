<?php

require 'includes/database.php';
$db = conectarDB();

$id = $_GET['id'];

$sql = "SELECT * FROM reservaciones WHERE id=$id";
$resultado = mysqli_query($db,$sql);
$reserva = mysqli_fetch_assoc($resultado);

if($_SERVER['REQUEST_METHOD']==='POST'){

$cliente = $_POST['cliente'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$tipo = $_POST['tipo_habitacion'];
$habitacion = $_POST['habitacion'];
$huespedes = $_POST['numero_huespedes'];
$entrada = $_POST['fecha_entrada'];
$salida = $_POST['fecha_salida'];
$metodo = $_POST['metodo_pago'];
$estado = $_POST['estado_reservacion'];

$sql = "UPDATE reservaciones SET
cliente='$cliente',
telefono='$telefono',
email='$email',
habitacion='$habitacion',
tipo_habitacion='$tipo',
fecha_entrada='$entrada',
fecha_salida='$salida',
numero_huespedes='$huespedes',
metodo_pago='$metodo',
estado_reservacion='$estado'
WHERE id=$id";

mysqli_query($db,$sql);

header("Location:index.php");

}

?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Editar Reservación</title>
<link rel="stylesheet" href="build/css/style.css">

</head>

<body>

<div class="form-container">

<h1>Editar Reservación</h1>

<form method="POST">

<input type="text" name="cliente" value="<?php echo $reserva['cliente']; ?>" required>

<input type="text" name="telefono" value="<?php echo $reserva['telefono']; ?>" required>

<input type="email" name="email" value="<?php echo $reserva['email']; ?>" required>

<label>Tipo habitación</label>

<select name="tipo_habitacion" id="tipoHabitacion" required>

<option value="Individual" <?php if($reserva['tipo_habitacion']=="Individual") echo "selected"; ?>>Individual</option>
<option value="Doble" <?php if($reserva['tipo_habitacion']=="Doble") echo "selected"; ?>>Doble</option>
<option value="Suite" <?php if($reserva['tipo_habitacion']=="Suite") echo "selected"; ?>>Suite</option>
<option value="Familiar" <?php if($reserva['tipo_habitacion']=="Familiar") echo "selected"; ?>>Familiar</option>

</select>

<label>Número de habitación</label>

<select name="habitacion" id="habitacionSelect" required>

<option value="<?php echo $reserva['habitacion']; ?>" selected>
Habitación <?php echo $reserva['habitacion']; ?>
</option>

</select>

<label>Huéspedes</label>

<input type="number"
id="huespedesInput"
name="numero_huespedes"
value="<?php echo $reserva['numero_huespedes']; ?>"
min="1"
required>

<label>Fecha entrada</label>

<input type="date"
name="fecha_entrada"
value="<?php echo $reserva['fecha_entrada']; ?>"
required>

<label>Fecha salida</label>

<input type="date"
name="fecha_salida"
value="<?php echo $reserva['fecha_salida']; ?>"
required>

<label>Método pago</label>

<select name="metodo_pago" required>

<option value="Efectivo">Efectivo</option>
<option value="Tarjeta">Tarjeta</option>
<option value="Transferencia">Transferencia</option>

</select>

<label>Estado de reservación</label>

<select name="estado_reservacion" required>

<option value="Confirmada" <?php if($reserva['estado_reservacion']=="Confirmada") echo "selected"; ?>>Confirmada</option>

<option value="Pendiente" <?php if($reserva['estado_reservacion']=="Pendiente") echo "selected"; ?>>Pendiente</option>

<option value="Cancelada" <?php if($reserva['estado_reservacion']=="Cancelada") echo "selected"; ?>>Cancelada</option>

</select>

<input type="submit" value="Actualizar">

</form>

</div>

<script src="build/js/validation.js"></script>

</body>
</html>