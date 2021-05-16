<?php
include "../db.php";

$id = $_GET["id"];
$name = $_GET["name"];

unlink($_SERVER["DOCUMENT_ROOT"] . $uploadCarpet . $name);

$query = "
DELETE FROM `bagsimages` WHERE id = $id
";

$db->query($query);

header("Location:" . $home);
