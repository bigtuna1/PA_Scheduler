<?php

try{
$db = new PDO("mysql:host=localhost;dbname=associates","root","KW6bqVT69SyESN5Z");
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->exec("SET NAMES 'utf8'");
var_dump($db);
} catch (Exception $e) {
	echo "could not connect";
	exit;
}

try {
	$results = $db->query("select name, price from products order by sku asc");
} catch (Exception $d {
	echo "Data could not be retrived from the databse.";
	exit;
}

?>
