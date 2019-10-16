<?php

//key and token

// $consumer_key = "JRVvYJroN43ldDCoEsDbpOZop";
// $consumer_secret = "RIW2aUhY7laZOZCjCK3uxhLtKpOJASUPvGBst4283mwE0AegIE";
// $access_token = "3311102258-AUzoVs900tHzxVFU614c96sM0yio9csFeqvLOs4";
// $access_token_secret = "eEoKYRWbVSJFBZPi4DHZSGHQoay3YtO6c7KLm6cmSY1hL";


$consumer_key = "TXmfy3Ag2YeyJCKLrFn3iBP1j";
$consumer_secret = "aqLsE40KgMXQwRMMFMxBs9s5jCvDU7D7hDbKQnHzg4CpcoHL5u";
$access_token = "3311102258-N0hkmZTe4hJmKweWnIGV3SB6JTgBJAgiXLCYzaM";
$access_token_secret = "IABPFG5svnCVn7XDtvP7NfctV8niNeNwC3TusKx4BcNAL";



require_once './vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$statuses = $connection->post("statuses/update", ["status" => "Test RestApi By Tuanda "]);

$tweets = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

echo "<pre>";
print_r($tweets);
echo"</pre>";


?>