<?php

require 'database.php';

function obtenerReservaciones(){

$db = conectarDB();

$sql = "SELECT * FROM reservaciones";

$stmt = $db->prepare($sql);

$stmt->execute();

$resultado = $stmt->get_result();

return $resultado;

}

?>