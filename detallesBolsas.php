<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="detallesBolsas.css">
	<link id="pageIcon" rel="shortcut icon" href="media/img/iconoLogo/iconoLogoAB.png">
	<script src="script.js"></script>
	<title>Angeline Bags | Detalles</title>
</head>

<?php
include "php/crud/config.php";
$id = $_GET["id"];
$api = json_decode(file_get_contents($apiUrl . "?id=" . $id))[0];
?>


<body>
	<!--rrss íconos-->
	<a href="https://www.facebook.com/Angeline-Bags-116249993559397/" target="_blank">
		<div class="logoFb"> <img src="media/svg/facebookLogo.svg" alt=""></div>
	</a><a href="https://www.instagram.com/angelinebags/?hl=es" target="_blank">
		<div class="logoInsta"><img src="media/svg/instaLogo.svg" alt=""></div>
	</a><a href="" target="_blank">
		<div class="logoWhats"><img src="media/svg/whatsLogo.svg" alt=""></div>
	</a>
	<!--flecha-arriba-->
	<div class="flechaArriba"><a href="#principal"> <img id="flechaArriba" src="media/svg/flechaIrArriba.svg" alt=""></a></div>
	<!--flecha-regreso al inicio-->
	<a id="backArrow" href="index.php#productos"><img src="media/svg/flechaIrArriba.svg" alt=""></a>
	<!--header-->
	<header id="principal">
		<div class="headerTexto">
			<a href="index.php">
				<h1>Angeline Bags</h1>
			</a>
		</div>
	</header>
	<!--bolsa-->
	<div class="contenedorBolsa">
		<div class="contenedorBolsaTextos">
			<div class="contenedorBolsaNombre">
				<h2><?php echo $api->description ?></h2>
			</div>
			<div class="contenedorBolsaPrecio">
				<h2>$<?php echo $api->price ?>.00 mxn</h2>
			</div>
		</div>

		<div class="contenedorBolsaGrafico">
			<?php foreach ($api->images as $image) : ?>
				<div class="contenedorBolsaImagenes">
					<div class="contenedorIndBolsa">
						<div class="contenedorImgBolsa">
							<img src="<?php echo $image->url ?>" alt="">
						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
	<!--características-->
	<div class="contenedorCaracteristicas">
		<div class="contenedorCaracteristicasTitulo">
			<h2>Características</h2>
		</div>
		<div class="contenedorCaracteristicasTabla">
			<table>
				<tr>
					<td id="caract">Alto:</td>
					<td id="info"><?php echo $api->height ?> cms</td>
				</tr>
				<tr>
					<td id="caract">Largo:</td>
					<td id="info"><?php echo $api->lenght ?> cms</td>
				</tr>
				<tr>
					<td id="caract">Ancho:</td>
					<td id="info"><?php echo $api->width ?> cms</td>
				</tr>
				<tr>
					<td id="caract">Largo del asa:</td>
					<td id="info"><?php echo $api->handle ?> cms</td>
				</tr>
				<tr>
					<td id="caract">Material:</td>
					<td id="info">Toquilla</td>
				</tr>
			</table>
		</div>
	</div>
</body>

</html>