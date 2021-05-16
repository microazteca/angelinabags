<?php
try {
	$host = "localhost";
	$dbname = "u592367988_angelineBags";
	$username = "u592367988_angelineBags";
	$password = "Mo]6ED]yRf";
	//$host = "localhost";
	//$dbname = "bolsas";
	//$username = "root";
	//$password = "";
	$db = new PDO('mysql:host=' . $host . '; dbname=' . $dbname, $username, $password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$db->exec("SET CHARACTER SET UTF8");
} catch (Exception $e) {
	die("Error" . $e->getMessage());
	echo "error line: " . $e->getLine();
}
 $home = "https://salonrizo.com/tools/angelinebags/crud/";
 $apiUrl = "https://salonrizo.com/tools/angelinebags/api/";
 $uploadCarpet = "/tools/angelinebags/uploads/";


//$home = "http://localhost/angelinebags/public/crud/";
//$apiUrl = "http://localhost/angelinebags/public/api/";
//$uploadCarpet = "/angelinebags/public/uploads/";
