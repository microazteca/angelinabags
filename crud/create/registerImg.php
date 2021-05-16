<?php
include "../db.php";

function diverse_array($vector)
{
	$result = array();
	foreach ($vector as $key1 => $value1)
		foreach ($value1 as $key2 => $value2)
			$result[$key2][$key1] = $value2;
	return $result;
}

$images = diverse_array($_FILES["images"]);
$id = $_POST["id"];

foreach ($images as $image) {
	if ($image["name"] != '') {

		$name = $image["name"];
		$type = $image["type"];
		$size = $image["size"];
		$tmp = $image["tmp_name"];

		$destiny = $_SERVER["DOCUMENT_ROOT"] . $uploadCarpet;

		move_uploaded_file($tmp, $destiny . $name);

		$query =
			"
		INSERT INTO bagsimages(`idBag`, `name`)
		VALUES ('$id','$name')
		";
		$db->query($query);
	}
}

header("Location:" . $home);
