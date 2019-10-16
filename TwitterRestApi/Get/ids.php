<?php

//key and token
$consumer_key = "JRVvYJroN43ldDCoEsDbpOZop";
$consumer_secret = "RIW2aUhY7laZOZCjCK3uxhLtKpOJASUPvGBst4283mwE0AegIE";
$access_token = "3311102258-AUzoVs900tHzxVFU614c96sM0yio9csFeqvLOs4";
$access_token_secret = "eEoKYRWbVSJFBZPi4DHZSGHQoay3YtO6c7KLm6cmSY1hL";


// require "../vendor/autoload.php";
require_once '../vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$content = $connection->get("account/verify_credentials");

$follow = $connection->get("followers/ids", ["screen_name" => "@ONEChampionship"]);

echo "<pre>";
print_r($follow);
echo"</pre>";


?>