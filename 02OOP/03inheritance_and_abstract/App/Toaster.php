<?php

namespace App;

class Toaster extends AbstractProduct
{
  protected int $slots = 2;

  public function toast()
  {
    echo "\n The bread is toasting";
  }

  public function setup()
  {
    echo "setup";
  }
}
