<?php

$url = "https://jsonplaceholder.typicode.com/posts";

$curl = curl_init($url);

//setting CURLOPT_RETURNTRANSFER to true, makes cURL to return a string
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

echo "<pre>$response";