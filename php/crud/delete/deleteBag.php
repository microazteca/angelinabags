<?php
include "../db.php";
$id = $_GET["id"];

$query = "
DELETE FROM `bags` WHERE id = $id
";

$db->query($query);

header("Location:" . $home);
