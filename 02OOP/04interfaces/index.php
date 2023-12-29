<?php

declare(strict_types=1);

//class autoloader
spl_autoload_register(function ($class) {
  $formattedClass = str_replace("\\", "/", $class);
  $path = "{$formattedClass}.php";

  require_once $path;
});

use App\RestaurantOne;

$restaurant = new RestaurantOne();
$restaurant->prepareFood();
echo "\n";
