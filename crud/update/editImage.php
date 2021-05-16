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
	$oldName = $_POST["oldName"];
	$newName = $_POST["newName"];

	$oldNameUrl = $_SERVER["DOCUMENT_ROOT"] . $uploadCarpet . $oldName;
	$newNameUrl = $_SERVER["DOCUMENT_ROOT"] . $uploadCarpet . $newName;

	rename($oldNameUrl, $newNameUrl);

	$db->query("
	UPDATE `bagsimages` 
	SET name = '$newName' 
	WHERE id = '$id'");

	header("Location:" . $home);
} else if (isset($_GET["id"])) {

	$id = $_GET["id"];
	$info = $db->query("SELECT * FROM `bagsimages` WHERE id=$id")->fetchAll(PDO::FETCH_OBJ);
	$image = $info[0];
}
?>

<body>
	<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="container col-6 bg-light p-0 my-5">
		<h3 class="container-fluid text-center bg-warning p-2">Image registration</h3>
		<div class="container d-flex flex-column flex-fill">
			<div>
				<input type="hidden" name="oldName" value="<?php echo $image->name ?>">
				<label for="" class="form-label col-2">Image Id:</label>
				<input type="text" name="id" value="<?php echo $image->id ?>" readonly class="text-secondary">
			</div>
			<div>
				<label for="" class="form-label col-2">Name:</label>
				<input type="text" name="newName" class="w-50" value="<?php echo $image->name ?>" required>
			</div>
			<div class="mt-auto mb-2">
				<input type="submit" value="Submit" name="edit" class="btn btn-lg btn-warning container">
			</div>
		</div>
	</form>
	<div class="container text-center"><img src="<?php echo $uploadCarpet . $image->name ?>" alt="" width="200" class="rounded"></div>
</body>

</html>