<?php
        require_once "./vendor/autoload.php";
		$db = (new MongoDB\Client)->tuandadb;
		$collection = $db->name;

       $update1 = $collection->updateOne(

		['firstName' => 'tuan'],
		[
			'$set' => ['age' => 1000]
		]
	    );
	    echo "Update successfully";
	   $update2 = $collection->updateMany(
		['age' => ['$gt' => 23]],
		[
			'$set' => ['Manly' => true]
		]
	   );
	   echo "Update successfully";



?>