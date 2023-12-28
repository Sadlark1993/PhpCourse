<?php

declare(strict_types=1);

//this way of declaring properties and constructor is available in php 8 and above.
class PropertyPromotion
{
  public function __construct(
    public string $name,
    public float $balance
  ) {
  }
}
