<?php


		//key api
		$consumer_key = "TXmfy3Ag2YeyJCKLrFn3iBP1j";
		$consumer_secret = "aqLsE40KgMXQwRMMFMxBs9s5jCvDU7D7hDbKQnHzg4CpcoHL5u";
		$access_token = "3311102258-N0hkmZTe4hJmKweWnIGV3SB6JTgBJAgiXLCYzaM";
		$access_token_secret = "IABPFG5svnCVn7XDtvP7NfctV8niNeNwC3TusKx4BcNAL";

		//TwitterOAuth
		require_once '../vendor/autoload.php';
		use Abraham\TwitterOAuth\TwitterOAuth;

		//connect mongodb 	
		$db = (new MongoDB\Client)->nytime;
		$collection = $db->tweets;

		// make api requests
		$connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
		$content = $connection->get("account/verify_credentials");
		$time = $connection->get("statuses/user_timeline", ['screen_name' => '@nytimes', 'count' => 10, 'trim_user' => true, 'include_entities' => false, 'tweet_mode' => extended]);

		// echo "<pre>";
		// print_r($time);
		// echo "</pre>";

		foreach ($time as $tweet) {
				$date = new DateTime($tweet->created_at);
				$create_at = $date->setTimezone(new DateTimeZone('Asia/Ho_Chi_Minh'))->format('H:i:s d/m/Y');
				$id = $tweet->id;
				$full_text = str_replace("\n"," ",$tweet->full_text);
				$url = ltrim(end(explode(" ", $full_text)));
				$title = stripcslashes(trim(chop($full_text, $url)));
				$retweet_count = $tweet->retweet_count;
				$favorite_count = $tweet->favorite_count;
				if($tweet->retweeted_status){
					$full_text = str_replace("\n"," ",$tweet->retweeted_status->full_text);
					$url = ltrim(end(explode(" ", $full_text)));
					$title = stripcslashes(trim(chop($full_text, $url)));
					$retweet_count = $tweet->retweeted_status->retweet_count;
					$favorite_count = $tweet->retweeted_status->favorite_count;
				}
				$document = array(
					'_id' => $id,
					'create_at' => $create_at,
					'url' => $url,
					'title' => $title,
					'retweet_count' => $retweet_count,
					'favorite_count' => $favorite_count
				);
				$updateResult = $collection->updateOne([ '_id' => $document['_id'] ], ['$set' => $document], ['upsert' => true]);
				if($updateResult->getModifiedCount()){
					echo "<br /> Update successfully !!!";
				}else if($updateResult->getUpsertedCount()){
					echo "<br /> Insert successfully !!!";
				}
			};
			$retweet_most = $collection->find([],['sort' => array("retweet_count" => -1),'limit' => 1]);








?>