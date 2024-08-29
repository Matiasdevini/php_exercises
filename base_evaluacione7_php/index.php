<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programación web con PHP y MySQL</title>
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
        	<h1>Programación Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        
<?php $FRASE_1 = '¿QUE ESPERAS PARA TENER TU DIPLOMA?';
      $FRASE_2 = 'CAPACITATE CUANDO Y DONDE QUIERAS.';
      $FRASE_3 = 'DESCUBRÍ EL VALOR DE FORMAR PARTE DE NUESTRA UNIVERSIDAD.';
      ?>
      <h3 class= "frases"><?php echo $FRASE_1; ?></h3>
      <ul>
        <li><?php echo $FRASE_2; ?></li>
        <li><?php echo $FRASE_3; ?></li>
      </ul>


    </div>
    <div id="uni4_2">
<?php $PALABRA_1 = 'EVALUACIÓN';
      $PALABRA_2 = 'INTEGRADORA';
      $PALABRA_3 = 'PHP y MySQL';
      ?>
     <P> <?php echo $PALABRA_1; ?></P>
     <p> <?php echo $PALABRA_2; ?></p>
     <p> <?php echo $PALABRA_3; ?></p>
    </div>
    <div id="uni4_3">
      <?php $NOMBRE = 'Matias';
            $EDAD = 41;
            $APRWEBINIC= TRUE;
            ?>
       <P> NOMBRE: <?php echo $NOMBRE; ?> </P>
       <p> EDAD: <?php echo $EDAD; ?> AÑOS</p>
       <?php
if($APRWEBINIC == TRUE) { ?> <P>HABILITADO PARA CURSASR PHP INTERMEDIO</P>  <?php }
else {?> <P>NO ESTA HABILITADO PARA CURSAR</P>  <?php }
?>

    </div>
    <div id="uni4_4">
        <?php $CLASES_TOTALES = 8;
              $CLASES_CURSADAS = 4;
              $PORCENTAJE_CURSADO = ($CLASES_CURSADAS * 100)/ $CLASES_TOTALES;
?>
      <H3>CURSADO CUMPLIDO</H3>
    <P> CLASES DEL CURSO: <?php echo $CLASES_TOTALES; ?></P>
    <p> CLASES CURSADAS: <?php echo $CLASES_CURSADAS; ?></p>
    <p class="frases" > PORCENTAJE CUMPLIDO DEL CURSO: <?php echo $PORCENTAJE_CURSADO; ?> %</p>

    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>