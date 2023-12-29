<?php

declare(strict_types=1);

//class autoloader
spl_autoload_register(function ($class) {
  $formattedClass = str_replace("\\", "/", $class);
  $path = "{$formattedClass}.php";

  require_once $path;
});

use App\{RestaurantOne, RestaurantTwo, FoodApp};

new FoodApp(new RestaurantOne);
echo "\n";
new FoodApp(new RestaurantTwo);
echo "\n";
