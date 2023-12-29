<?php

namespace App;

class EmptyArrayException extends \Exception
{
  protected $message = "Array is empty"; //overriding the original property
}
