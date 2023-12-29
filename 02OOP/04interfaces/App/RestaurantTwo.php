<?php

declare(strict_types=1);

namespace App;

class RestaurantTwo implements RestaurantInterface
{
  public function prepareFood()
  {
    echo "\nPreparing food from restaurant two.";
  }
}
