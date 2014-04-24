<?php
$url = $_GET["url"];
$callback = $_GET["callback"];
$baseUrl =  base64_encode(file_get_contents($url));
header('Content-type: application/javascript');
echo $callback.'("'.$baseUrl.'");';