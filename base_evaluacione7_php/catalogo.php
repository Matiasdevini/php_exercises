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
    <h2>Catálogo - Unidad V</h2>

    <nav id="btn_catalogo">
        <ul>
            <li><a href="catalogo.php?desc=sil#contenido">SILLON CAPRI</a></li>
            <li><a href="catalogo.php?desc=mes#contenido">MESA IPANEMA</a></li>
            <li><a href="catalogo.php?desc=ban#contenido">BANCO VENECIA</a></li>
        </ul>
    </nav>
<div id= "desc_prod">
<?php
if (isset ($_GET ['desc'])){
switch ($_GET['desc']) {
    case'sil':
        $productos= 'SILLON CAPRI';
        $precio= '$ 345';
        $caracteristicas= ' Concebida para ser utilizada tanto bajo techo como a la intemperie. La madera de origen brasilera está acabada con un recubrimiento de Resina Polisten que la embellece. 
        '; 
        $foto= 'sillon1.jpg';
        break;
    case 'mes':
        $productos= 'MESA IPANEMA';
        $precio= '$ 500';
        $caracteristicas= 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC y concebida para ser utilizada tanto bajo techo como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.'; 
        $foto= 'ipanema.jpg';
        break;    
    case 'ban':
        $productos= 'BANCO VENECIA';
        $precio= '$ 450';
        $caracteristicas= 'Se trata de una colección de muebles de madera de eucaliptos, certificada con el sello FSC (SWCOC-091) y concebida para ser utilizada tanto bajo techado como a la intemperie. La madera es de origen brasilera. Las medidas son: 120 cms.'; 
        $foto= 'venecia.jpg';
        break;    
}
?>
<div id= "titulo">
<h2><?php echo $productos; ?></h2>
</div>
<p class= "precio"> PRECIO:<?php echo $precio; ?></p>
<p class= "muestra"><?php echo $caracteristicas; ?> </p>
<div id= "ubic">
<img class= "imagen" src="imagenes/<?php echo $foto; ?>" alt="<?php echo $producto; ?>">
</div>
</div>

<?php
} else {?>
<p> <b> Seleccione uno de nuestros productos para conocerlo en detalle.</b></p>

<img class= "ajustar" src="imagenes/Banner.jpg" alt="Banner">

<?php
}
?>

 </section>
<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>






