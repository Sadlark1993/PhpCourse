<?php

declare(strict_types=1);

$timezone = new DateTimeZone("America/Chicago");
$date = new DateTime("22-12-2023", $timezone);
$date->setTimeZone(new DateTimeZone("America/Cuiaba"))
  ->setDate(2023, 6, 15)
  ->setTime(9, 30);

echo "\n" . var_dump($date) . "\n";
echo "\n" . $date->format("d/m/Y") . "\n";

//carbon is a popular solution to deal with dates.