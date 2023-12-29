<?php

namespace App;

use InvalidArgumentException;

class Utility
{
  public static function printArr(array $array)
  {
    if (sizeof($array) === 0) {
      throw new InvalidArgumentException("The array is empty.");
      //throw new EmptyArrayException(); //using the custom exception
    }
    echo "\n" . print_r($array, true) . "\n";
  }
}
