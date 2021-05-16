<?php
include "./php/crud/db.php";

$description = $_GET["description"];
$price = $_GET["price"];
$lenght = $_GET["lenght"];
$width = $_GET["width"];
$height = $_GET["height"];
$handle = $_GET["handle"];

$query = "
INSERT INTO bags( `description`, `price`, `lenght`, `width`, `height`, `handle`) 
VALUES ('$description','$price','$lenght','$width','$height','$handle')
";

$db->query($query);

//header("Location:" . $home);
