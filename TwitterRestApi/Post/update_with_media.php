<?php


$consumer_key = "TXmfy3Ag2YeyJCKLrFn3iBP1j";
$consumer_secret = "aqLsE40KgMXQwRMMFMxBs9s5jCvDU7D7hDbKQnHzg4CpcoHL5u";
$access_token = "3311102258-N0hkmZTe4hJmKweWnIGV3SB6JTgBJAgiXLCYzaM";
$access_token_secret = "IABPFG5svnCVn7XDtvP7NfctV8niNeNwC3TusKx4BcNAL";


require_once '../vendor/autoload.php';

use Abraham\TwitterOAuth\TwitterOAuth;

$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$media1 = $connection->upload('media/upload', ['media' => '../Image/naruto.jpg']);
$media2 = $connection->upload('media/upload', ['media' => '../Image/friend.jpg']);

$parameters = [
    'status' => 'hihihiiiii hahahahahaha hohohohoho',
    'media_ids' => implode(',', [$media1->media_id_string, $media2->media_id_string])
];

$result = $connection->post('statuses/update', $parameters);

echo "<pre>";
print_r($result);
echo "</pre>";



?>