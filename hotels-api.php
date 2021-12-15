<?php

$curl = curl_init();
$location = $_POST['location'];
curl_setopt_array($curl, [
	CURLOPT_URL => "https://hotels4.p.rapidapi.com/locations/v2/search?query="+ $location +"&locale=en_US&currency=USD",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: hotels4.p.rapidapi.com",
		"x-rapidapi-key: b0c2038476msh5eafbb3d1ee5b77p1accc4jsn6d571ee650a7"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}