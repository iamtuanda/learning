<?php
require 'vendor/autoload.php';

$client = new MongoDB\Client;

$demodb = $client ->demodb;


foreach($client->listDatabases() as $db)
{
	var_dump($db);
}



$result1 = $demodb->dropCollection('demo');
var_dump($result1);



foreach($demodb->listCollections() as $collection)
{
	var_dump($collection);
}



$result = $demodb->createCollection('demo');

var_dump($result);




?>