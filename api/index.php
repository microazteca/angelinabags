<?php
include "bags.php";

$bags = new request($db);

if (isset($_GET["id"])) {
	$bags->getOne($_GET["id"]);
} else {
	$bags->getAll();
}
