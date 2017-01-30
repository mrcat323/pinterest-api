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
	$board = array(
	"name" => "Name of your board",
	"description" => "Description"
	);
	$data = json_encode($board);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, URL_BOARD."?access_token".ACCESS_TOKEN);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data)
	curl_setopt($ch, CURLOPT_HEADER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	"Content-Type" => "application/json",
	"Content-Length" . strlen($data)
	));
	$out = curl_exec($ch);
	print_r($out);
	curl_close($ch);
?>