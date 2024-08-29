<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Contáctenos - Unidad VIII</h2>

    <form action="enviar_consulta.php" method= "POST">

          <input type="text" name= "nombre" maxlength= 30 required placeholder= "ingrese su nombre" class= "input_cliente">
          <input type="text" name= "apellido" maxlength= 50 required placeholder= "ingrese su apellido" class= "input_cliente">
          <input type="mail" name= "correo" maxlength= 100 required placeholder= "ingrese su correo electrónico" class= "input_cliente">
          <textarea name= "consulta" required placeholder= "ingrese su consulta" class= "textarea" ></textarea> 
          <input type="submit" value= "enviar consulta" class= "input_cliente">
    <?php

    if (isset($_GET ['ok'])) {?>
        <h3><?php echo "CONSULTA ENVIADA !!!" ?></h3>
    <?php
    }
    ?>
    </form>
    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>