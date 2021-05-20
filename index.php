<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<link id="pageIcon" rel="shortcut icon" href="iconoLogo/iconoLogoAB.png">
	<script src="script.js"></script>
	<title>Angeline Bags</title>
</head>

<?php
include "php/crud/config.php";
$api = json_decode(file_get_contents($apiUrl));
?>

<body></body>
<!-- includes-->
<!--rrss íconos--><a href="https://www.facebook.com/Angeline-Bags-116249993559397/" target="_blank">
	<div class="logoFb"> <img src="svg/facebookLogo.svg" al></div>
</a><a href="https://www.instagram.com/angelinebags/?hl=es" target="_blank">
	<div class="logoInsta"><img src="svg/instaLogo.svg" al></div>
</a><a hre target="_blank">
	<div class="logoWhats"><img src="svg/whatsLogo.svg" al></div>
</a>
<!--flecha-arriba-->
<div class="flechaArriba"><a href="#principal"> <img id="flechaArriba" src="svg/flechaIrArriba.svg" alt=""></a></div>
<!--header-->
<header id="principal">
	<div class="headerTexto">
		<h1>Angeline Bags</h1>
	</div>
	<nav>
		<ul>
			<li><a href="#productos">PRODUCTOS </a></li>
			<li><a href="#contacto">CONTACTO</a></li>
		</ul>
	</nav>
</header>
<!-- slider-->
<div class="sliderBolsas">
	<ul>
		<li> <img src="imagenesSlider/bolsasSlider.jpg" al></li>
		<li> <img src="imagenesSlider/bolsasSlider2.jpg" al></li>
		<li> <img src="imagenesSlider/bolsasSlider.jpg" al></li>
		<li> <img src="imagenesSlider/bolsasSlider2.jpg" al></li>
	</ul>
</div>
<!-- productos-->
<div class="productos" id="productos">
	<div class="productosTitulo">
		<h2>PRODUCTOS</h2>
	</div>
	<div class="productosCatalogo">

		<?php foreach ($api as $bag) : ?>
			<div class="contenedorProductos">
				<div class="contenedorProductosImg"><img src="<?php echo $bag->images[0]->url; ?>" alt="<?php echo $bag->description ?>"></div>
				<div class="contenedorProductosTexto">
					<p><?php echo $bag->description ?></p>
					<p>$<?php echo $bag->price ?>.00 MXN</p><a href="detallesBolsas.php?id=<?php echo $bag->id ?>">
						<button>Ver detalles</button></a>
				</div>
			</div>
		<?php endforeach; ?>

	</div>
</div>
<!-- contacto-->

</html>
<div class="contacto" id="contacto">
	<div class="contactoTitulo">
		<h2>CONTACTO</h2>
	</div>
	<div class="contactoTelefono">
		<div class="contactoTelefonoNumero"><a href="tel:+529981117490">
				<h4>998 111 74 90</h4>
			</a></div>
		<div class="contactoTelefonoTexto">
			<h4>(Haz clic para llamar)</h4>
		</div>
	</div>
</div>