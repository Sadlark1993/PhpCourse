<?php
//sudo service apache2 restart
//sudo apt-get install php-curl
//sudo service apache2 restart


/* $myCurl = curl_init();
curl_setopt_array($myCurl, array(
  URL
)); */



$url = "https://jsonplaceholder.typicode.com/posts";

$curl = curl_init($url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);
curl_close($curl);

echo $response;
