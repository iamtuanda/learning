<?php
        require_once "./vendor/autoload.php";
		$db = (new MongoDB\Client)->tuandadb;
		$collection = $db->name;

       $delete1 = $collection->deleteOne(['sex' => 'female']);
	echo "delete one complete ";
	$delete2 = $collection->deleteMany(['Manly' => true]);
	echo "delete many complete";


?>