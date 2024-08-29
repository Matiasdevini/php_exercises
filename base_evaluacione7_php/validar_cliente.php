<?php 
session_start();
$correo_noticias = $_POST ['correo'];
$passw_noticias = $_POST ['pswrd'];


    if ($correo_noticias == 'cliente@gmail.com' && $passw_noticias == 'phpintermedio') {
        
        $_SESSION ['clientes'] = $correo_noticias;
        header ("location: clientes.php#contenido");

    } else {
        header ("location: clientes.php?error#contenido"); 
    
    }