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
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
<h2>Unidad VI - Bucles y Vectores</h2>
    <?php 
    $noticias = array(
    array('titulo'=>'SUPERINTELIGENCIA ARTIFICIAL', 'texto' => 'El magnate Elon Musk aseguró este miércoles que en unos 
    “cinco o seis años” habrá surgido una “superinteligencia” artificial, capaz de superar a cualquier ser humano en 
    cualquier disciplina.“Eso no significa necesariamente que sea más inteligente que la suma de todos los humanos”, 
    explicó Musk durante un evento en Twitter junto a dos congresistas estadounidenses. Los tres participantes estuvieron 
    de acuerdo en la importancia de regular el desarrollo de las tecnologías de IA aunque los tresdesde diferentes enfoques.', 'imagen' => 'intart.jpg'),
    array('titulo'=> 'LA NARIZ DE LOS GATOS', 'texto'=> 'La estructura nasal felina funciona de forma similar a los más
     sofisticados equipos de laboratorio utilizados para el análisis altamente preciso y eficiente de la composición 
     química de las sustancias. La nariz de los gatos está formada por un conjunto de estructuras óseas de las vías 
     respiratorias fuertemente enrolladas, los cornetes, y que en su forma de caracol guardan paralelismos y semejanzas 
     con algunos equipos de análisis químico sofisticado y de alta precisión llamados cromatógrafos de gases en espiral 
     paralelos.','imagen' => 'gato.jpg'),
    array('titulo' => 'TUTORÍAS ESCOLARES', 'texto'=> 'En algunas historias escolares, una mirada puede hacer la diferencia.
     Para ciertos alumnos, resulta clave tener a quién acudir cuando enfrentan dificultades con una materia. 
     Saber que, después de un examen, recibirán un mensaje preguntándoles cómo les fue. Los estudiantes que se sienten
      acompañados están más motivados para llegar a la meta: de eso se tratan las tutorías escolares, una estrategia que 
      mejora las trayectorias educativas.','imagen' =>'tutor.jpg'),
    array('titulo'=>'LA NUEVA HINCHADA DE LEO MESSI', 'texto'=> 'Un grupo de amigos argentinos cargaron las valijas y dejaron
     su país allá por el año 2000, en plena crisis económica, con destino a la ciudad de Miami. Lo que no imaginaron es 
     que 23 años más tarde, disfrutando de una asado a las pocas horas de que se supo que Lionel Messi iba a seguir su 
     carrera en el Inter Miami, se les ocurrió la gran idea de crear la hinchada del astro argentino y no lo dudaron: 
     dieron a luz a la ‘Messias 305 Miami’.','imagen'=>'messi.jpg'));
    ?>
    <h2> BUCLE DE NOTICIAS</h2>
<?php 
for ($i=0; $i < count($noticias) ; $i++) { ?>

    <div class= "bucle_noticias">
   <h3><?php echo $noticias [$i]['titulo']; ?></h3>
   <img src="imagenes/<?php echo $noticias [$i]['imagen']; ?>" alt="<?php echo $noticias [$i]['titulo']; ?>" class="ajustar">
   <p><?php echo $noticias [$i]['texto']; ?></p>
  
   </div>
<?php
}
?>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>