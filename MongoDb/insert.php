<?php
		require_once "vendor/autoload.php";
		$db = (new MongoDB\Client)->tuandadb;
		$collection = $db->name;

		$doc = array(
	"name" => "MongoDB",
	"type" => "database",
	"count" => 1,
	"info" => (object)array( "x" => 203, "y" => 102),
	"versions" => array("0.9.7", "0.9.8", "0.9.9")
				);
	$collection->insertOne( $doc );
	$collection->insertMany([
		[
			'firstName' => 'tuan',
			'lastName' => 'da',
			'age' => 22,
			'sex' => 'male'
		],
		[
			'firstName' => 'ngoc',
			'lastName' => 'binh',
			'age' => 18,
			'sex' => 'female'
		],
		[
			'firstName' => 'hihihi',
			'lastName' => 'hahhaa',
			'age' => 11,
			'sex' => 'no sex'
		]
	]);


?>