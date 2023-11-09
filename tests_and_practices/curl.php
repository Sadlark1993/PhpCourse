<?php

/* $myCurl = curl_init();
curl_setopt_array($myCurl, array(
  URL
)); */



$url = "https://api.example.com/data";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
