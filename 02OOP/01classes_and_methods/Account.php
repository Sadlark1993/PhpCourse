<?php

declare(strict_types=1);

class Account
{
  public string $name;
  public float $balance;

  /* 
  * Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.
  * All magic methods must be declared as public, with exception of __construct(), __destruct() and __clone().
  * All magic methods names starts with __.
  */
  public function __construct(string $name, float $balance)
  {
    $this->name = $name;
    $this->balance = $balance;
  }

  public function deposit(float $amount)
  {
    $this->balance += $amount;
    return $this; //method chaining
  }
}
