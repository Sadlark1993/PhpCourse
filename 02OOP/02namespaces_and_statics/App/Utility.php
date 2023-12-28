<?php

namespace App;

class Utility
{
  public static function printArr(array $array)
  {
    echo "\n" . print_r($array, true) . "\n";
  }
}
