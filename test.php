<?php


session_start();
require_once('twitteroauth/twitteroauth.php');
require_once('config2.php');

set_time_limit(10000);

$connection = new TwitterOauth(CONSUMER_KEY, CONSUMER_SECRET, OAUTH_ACCESS_TOKEN, OAUTH_ACCESS_TOKEN_SECRET);

$result = $connection->get('users/show', array('screen_name'=>'afifalhawari'));

echo $result->friends_count;

?>


