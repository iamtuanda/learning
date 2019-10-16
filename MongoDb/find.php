<?php
        require_once "./vendor/autoload.php";
		$db = (new MongoDB\Client)->tuandadb;
		$collection = $db->name;

		$cursorAll = $collection->find([]);
	    $cursor1 = $collection->find(['age' => ['$lt' => 25]]);
	    $cursor2 = $collection->find(['sex' => 'male'],['projection' => ['firstName' => 1, 'lastName' => 1]]);


?>