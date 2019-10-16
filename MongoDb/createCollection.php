<?php
	require_once "./vendor/autoload.php";
	// connect to mongodb
	$m = (new MongoDB\Client);
	echo "Connection to database successfully";
	// select a database
	$db = $m->tuandadb;
	echo "Database myDatabase selected";

	$collection = $db->createCollection('name');
	echo "hihiih";

?>