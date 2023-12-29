<?php

namespace App;

require_once 'Toaster.php';

class ToasterPremium extends Toaster
{
  protected int $slots = 4;
  private int $duration = 1;

  public function toast()
  {
    parent::toast();
    echo " for {$this->duration} minutes.";
  }
}
