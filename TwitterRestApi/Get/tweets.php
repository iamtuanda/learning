<?php


$consumer_key = "TXmfy3Ag2YeyJCKLrFn3iBP1j";
$consumer_secret = "aqLsE40KgMXQwRMMFMxBs9s5jCvDU7D7hDbKQnHzg4CpcoHL5u";
$access_token = "3311102258-N0hkmZTe4hJmKweWnIGV3SB6JTgBJAgiXLCYzaM";
$access_token_secret = "IABPFG5svnCVn7XDtvP7NfctV8niNeNwC3TusKx4BcNAL";


require_once '../vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);

$content = $connection->get("account/verify_credentials");

$tweet = $connection->get("search/tweets", [
		'q' => 'men',
		'locale' => 'Vi',
		'lang' => 'en',
		'geocode' => '37.781157,-122.39872,1mi',
		'until' => '2019-05-10'
	]);



echo "<pre>";
print_r($tweet);
echo "</pre>";

?>