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
</a><a href="http://wa.me/529981117490?text=Buen+d%c3%ada.+Quiero+tener+m%c3%a1s+informaci%c3%b3n+de+las+bolsas." target="_blank">
	<div class="logoWhats"><img src="svg/whatsLogo.svg" al></div>
</a>
<!--flecha-arriba-->
<div class="flechaArriba"><a href="#principal"> <img id="flechaArriba" src="svg/flechaIrArriba.svg" alt=""></a></div>
<!--header-->
<header id="principal">
	<div class="headerTexto">
		<a href="index.php">
			<h1>Angeline Bags</h1>
		</a>
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
			<div class="contenedorCatalogoProductos">
				<div class="contenedorProductos">
					<div class="contenedorProductosImg"><a href="detallesBolsas.php?id=<?php echo $bag->id ?>"><img src="<?php echo $bag->images[0]->url; ?>" alt="<?php echo $bag->description ?>"></a></div>
					<div class="contenedorProductosTexto">
						<div class="contenedorProductosP">
							<p><?php echo $bag->description ?></p>
							<p>$<?php echo $bag->price ?>.00 MXN</p><a href="detallesBolsas.php?id=<?php echo $bag->id ?>">
						</div>
					</div>
					<div class="contenedorBotonDetalles">
						<button>Ver detalles</button>
						</a>
					</div>
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
	<div class="contactoMapa">
		<h3> Av. La Luna, esquina con Ek Balam</h3>
		<h4> &#9940; ¡Antes de ir, especifique a través de WhatsApp qué bolsa le interesa! &#9940;</h4>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.3668879197385!2d-86.85298318506551!3d21.137792685939434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b1c535c8ebf%3A0x2cdefb8fb2c4a06d!2sSalon%20Rizo!5e0!3m2!1ses-419!2smx!4v1621553586826!5m2!1ses-419!2smx" allowfullscreen="true" loading="lazy"></iframe>
		<div class="contenedorBotonMapa">
			<div class="botonMapa">
				<a href="https://www.google.com/maps?ll=21.137793,-86.850794&z=15&t=m&hl=es-419&gl=MX&mapclient=embed&cid=3233298177096720493" target="_blank">
					<button>Abrir en Maps</button></a>
			</div>
		</div>
	</div>
	<div class="contactoTelefono">
		<div class="contactoTelefonoNumero"><a href="tel:+529981117490">
				<h4> &#128222;998 111 74 90</h4>
			</a></div>
		<div class="contactoTelefonoTexto">
			<h4>(Haga clic en el número para llamar)</h4>
		</div>
	</div>
</div>