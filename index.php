<?php
	$host = "";
	$user = "";
	$clientVersion = "1.16.1";
	$clientName = "subsonic-artwork-proxy";
	$salt = "";
	$password = "";
	
	$queries = array();
	parse_str($_SERVER['QUERY_STRING'], $queries);
	$mediaId = $queries['id'];
	
	$url = "$host/rest/getCoverArt?f=json&u=$user&v=$clientVersion&c=$clientName&s=$salt&t=$password&id=$mediaId";
	$image = file_get_contents($url);
	header('Content-type: image/png');
	echo $image;
?>
