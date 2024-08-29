<?php

$nombre_cont = $_POST ['nombre'];
$apellido_cont = $_POST ['apellido'];
$correo_cont = $_POST ['correo'];
$consulta_cont = $_POST ['consulta'];

$conectar = mysqli_connect ("localhost", "root", "", "phpintermedio", ) or exit ("No se pudo conectar con la base de datos");

mysqli_query ($conectar, "INSERT INTO consultas VALUES (DEFAULT, '$nombre_cont', '$apellido_cont', '$correo_cont', '$consulta_cont')");

header ("location: contacto.php?ok#contenido");

?>