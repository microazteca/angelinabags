<?php
include "../config.php";
echo $host;
// try {
// 	$db = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $username, $password);
// 	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 	$db->exec("SET CHARACTER SET UTF8");
// } catch (Exception $e) {
// 	die("Error" . $e->getMessage());
// 	echo "error line: " . $e->getLine();
// }
