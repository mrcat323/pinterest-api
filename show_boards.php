<?php
	/* Simple script, working with Pinterest API
	\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\
	Created: Mr CaT 										   |
	date: 28th of January 2017 year 						   |
	Twitter: http://twitter.com/mrcat323 					   |
	Telegram: http://t.me/mrcat323 							   |
	Our public chat in telegram: http://t.me/goodproger 	   |
	////////////////////////////////////////////////////////////
	 */
	require_once "config.php";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, URL_BOARDS . "?access_token=".ACCESS_TOKEN);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 1);
	$out = curl_exec($ch);
	print_r($out);
?>