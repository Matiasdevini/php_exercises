<?php session_start(); ?>
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
    <h2>Clientes - Unidad VII</h2>

    <form method= "POST" action="validar_cliente.php">

         <input type="email" name= "correo" maxlength = "100" placeholder= " ingrese su correo electrónico" required>
         <input type="password" name= "pswrd" maxlength = "50" placeholder= " contraseña" required>
         <input type="submit" value= "ingresar">
    </form>
<?php
    if(isset($_SESSION['clientes'])){
        include ("contenido_clientes.php" );
    }    else  if(isset($_GET['error'])) { ?>
    <h3> <?php echo "Usuario no autorizado, ingrese un mail válido o registrese."; ?></h3>
    <?php   
     }
    ?>
   

    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>