<?php
require "vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// twitter auth things
const CONSUMER_KEY = "you";
const CONSUMER_SECRET = "must";
$access_token = "add";
$access_token_secret = "those";

// Sets up path to the images
$pathToAssets = 'images/';

// pick a random one (this excludes .files and .. folder)
$files = array_diff(scandir($pathToAssets), array('.', '..'));
$randIndex = array_rand($files);
$randImg = $files[$randIndex];

// get the content and do the base64
$image = file_get_contents($pathToAssets . $randImg);
$encodedBlob = base64_encode($image);

// connect to twitter
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);

// upload the header
$content = $connection->post('account/update_profile_banner', ['banner' => $encodedBlob]);