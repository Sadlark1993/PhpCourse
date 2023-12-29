<?php

declare(strict_types=1);

namespace App;

class FoodApp
{
  /**
   * Constructor of the Class
   * 
   * It will be executed when an instance of this class is created
   * 
   * @param RestaurantInterface $restaurant its the instance of the restaurant that will prepare the food.
   */
  public function __construct(RestaurantInterface $restaurant)
  {
    $restaurant->prepareFood();
  }
}
