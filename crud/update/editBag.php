<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
	<!-- BOOTSTRAP -->
</head>
<?php
include "../db.php";

if (isset($_POST["edit"])) {
	$id = $_POST["id"];
	$description = $_POST["description"];
	$price = $_POST["price"];
	$lenght = $_POST["lenght"];
	$width = $_POST["width"];
	$height = $_POST["height"];
	$handle = $_POST["handle"];

	$db->query("
	UPDATE `bags` 
	SET `description`='$description',`price`='$price',`lenght`='$lenght',`width`='$width',`height`='$height',`handle`='$handle'
	WHERE id = $id");

	header("Location:" . $home);
} else if (isset($_GET["id"])) {

	$id = $_GET["id"];
	$info = $db->query("SELECT * FROM `bags` WHERE id=$id")->fetchAll(PDO::FETCH_OBJ);
	$bag = $info[0];
}
?>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" class="container col-6 bg-light p-0 my-5">
		<h3 class="container-fluid text-center bg-warning p-2">Model edit information</h3>
		<div class="container mb-2">
			<input type="hidden" name="id" required value="<?php echo $bag->id; ?>">
			<label for="" class="form-label col-2">Description: </label>
			<input type="text" name="description" class="w-75" required value="<?php echo $bag->description; ?>"><br>
			<label for="" class="form-label col-2">Price (mxn): </label>
			<input type="number" name="price" class="w-75" required value="<?php echo $bag->price; ?>"><br>
			<label for="" class="form-label col-2">Lenght (cm): </label>
			<input type="number" name="lenght" class="w-75" required value="<?php echo $bag->lenght; ?>"><br>
			<label for="" class="form-label col-2">Width (cm): </label>
			<input type="number" name="width" class="w-75" required value="<?php echo $bag->width; ?>"><br>
			<label for="" class="form-label col-2">Height (cm): </label>
			<input type="number" name="height" class="w-75" required value="<?php echo $bag->height; ?>"><br>
			<label for="" class="form-label col-2">Handle (cm): </label>
			<input type="number" name="handle" class="w-75" required value="<?php echo $bag->handle; ?>"><br>
			<input type="submit" value="Submit" name="edit" class="btn btn-lg btn-warning container my-3">
		</div>
</body>

</html>