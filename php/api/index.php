<?php
include "bags.php";

$bags = new request($db, $imagesUrl);

if (isset($_GET["id"])) {
	$bags->getOne($_GET["id"]);
} else {
	$bags->getAll();
}
