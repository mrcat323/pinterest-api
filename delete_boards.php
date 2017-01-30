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
	$board = "Type here ID of your board";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, URL_BOARD.$board."?access_token".ACCESS_TOKEN);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	curl_setopt($ch, CURLOPT_HEADER, true);
	$out = curl_exec($ch);
	print_r($out);
?>