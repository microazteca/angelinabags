<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register | AngelineBags</title>
	<!-- BOOTSTRAP -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
	<!-- BOOTSTRAP -->
	<!-- FONTAWESOME -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<!-- FONTAWESOME -->
</head>

<?php
include "db.php";
$bags = $db->query("SELECT * FROM bags")->fetchAll(PDO::FETCH_OBJ);
$images = $db->query("SELECT * FROM bagsimages")->fetchAll(PDO::FETCH_OBJ);
?>

<body>
	<!-- Header -->
	<h1 class="text-center m-2 nav-dark">Bag registration</h1>
	<!-- Forms -->
	<div class="container my-5">
		<div class="row">
			<form action="create/registerBag.php" method="get" class="d-flex flex-column col-xxl bg-light p-0 m-2">
				<h3 class="container-fluid text-center bg-primary text-white p-2">Model registration</h3>
				<div class="container mb-2 d-flex flex-column flex-fill">
					<div>
						<label for="" class="form-label col-2">Description: </label>
						<input type="text" name="description" class="w-75" required><br>
					</div>
					<div>
						<label for="" class="form-label col-2">Price (mxn): </label>
						<input type="number" name="price" class="w-75" required><br>
					</div>
					<div>
						<label for="" class="form-label col-2">Lenght (cm): </label>
						<input type="number" name="lenght" class="w-75" required><br>
					</div>
					<div>
						<label for="" class="form-label col-2">Width (cm): </label>
						<input type="number" name="width" class="w-75" required><br>
						<div>
						</div>
						<label for="" class="form-label col-2">Height (cm): </label>
						<input type="number" name="height" class="w-75" required><br>
						<div>
						</div>
						<label for="" class="form-label col-2">Handle (cm): </label>
						<input type="number" name="handle" class="w-75" required><br>
					</div>
					<input type="submit" value="Submit" class="mt-auto btn btn-lg btn-primary container">
				</div>
			</form>
			<!-- Second form -->
			<form action="create/registerImg.php" method="POST" enctype="multipart/form-data" class="col-xxl bg-light p-0 m-2 d-flex flex-column">
				<h3 class="container-fluid text-center bg-success text-white p-2">Image registration</h3>
				<div class="container d-flex flex-column flex-fill">
					<div>
						<label for="" class="form-label col-4">Select publication:</label>
						<select name="id" class="w-50">
							<?php foreach ($bags as $bag) : ?>
								<option value=<?php echo $bag->id ?>><?php echo "Id:" . $bag->id . " Name: " . $bag->description ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div>
						<?php
						for ($i = 0; $i <= 8; $i++) {
							echo '
							<input type="file" name="images[]"><br>
							';
						}
						?>
					</div>
					<div class="mt-auto mb-2">
						<input type="submit" value="Submit" class="btn btn-lg btn-success container ">
					</div>
				</div>
			</form>
		</div>
	</div>
	<!-- tables -->
	<div class="container overflow-auto">
		<?php include "read/table.php"; ?>
	</div>
</body>

</html>