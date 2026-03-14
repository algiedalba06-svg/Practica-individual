<?php 
require 'includes/database.php';
$db = conectarDB();

$errores = [];

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

    if(!$cliente) $errores[]="Nombre obligatorio";
    if(!$telefono) $errores[]="Teléfono obligatorio";
    if(!$email) $errores[]="Email obligatorio";

    if(empty($errores)){

        $sql = "INSERT INTO reservaciones 
        (cliente,telefono,email,habitacion,tipo_habitacion,fecha_entrada,fecha_salida,numero_huespedes,metodo_pago,estado_reservacion)
        VALUES ('$cliente','$telefono','$email','$habitacion','$tipo','$entrada','$salida','$huespedes','$metodo','$estado')";

        mysqli_query($db,$sql);

        header("Location:index.php");
    }

}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<title>Nueva Reservación</title>
<link rel="stylesheet" href="build/css/style.css">

</head>

<body>

<div class="form-container">

<h1>Nueva Reservación</h1>

<?php foreach($errores as $error): ?>
<p><?php echo $error; ?></p>
<?php endforeach; ?>

<form method="POST">

<input type="text" name="cliente" placeholder="Nombre" required>

<input type="text" name="telefono" placeholder="Teléfono" required>

<input type="email" name="email" placeholder="Email" required>

<label>Tipo habitación</label>

<select name="tipo_habitacion" id="tipoHabitacion" required>

<option value="">Seleccionar</option>
<option value="Individual">Individual</option>
<option value="Doble">Doble</option>
<option value="Suite">Suite</option>
<option value="Familiar">Familiar</option>

</select>

<label>Número de habitación</label>

<select name="habitacion" id="habitacionSelect" required>
<option value="">Seleccionar</option>
</select>

<label>Huéspedes</label>

<input type="number"
id="huespedesInput"
name="numero_huespedes"
min="1"
required>

<label>Fecha entrada</label>

<input type="date"
name="fecha_entrada"
required>

<label>Fecha salida</label>

<input type="date"
name="fecha_salida"
required>

<label>Método pago</label>

<select name="metodo_pago" required>

<option value="">Seleccionar</option>
<option value="Efectivo">Efectivo</option>
<option value="Tarjeta">Tarjeta</option>
<option value="Transferencia">Transferencia</option>

</select>

<label>Estado de reservación</label>

<select name="estado_reservacion" required>

<option value="Confirmada">Confirmada</option>
<option value="Pendiente">Pendiente</option>
<option value="Cancelada">Cancelada</option>

</select>

<input type="submit" value="Guardar">

</form>

</div>

<script src="build/js/validation.js"></script>

</body>
</html>