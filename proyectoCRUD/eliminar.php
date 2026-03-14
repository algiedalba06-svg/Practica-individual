<?php

require 'includes/database.php';

$db = conectarDB();

$id = filter_var($_GET['id'], FILTER_VALIDATE_INT);

$sql = "DELETE FROM reservaciones WHERE id=?";

$stmt = $db->prepare($sql);

$stmt->bind_param("i",$id);

$stmt->execute();

header("Location:index.php");

?>