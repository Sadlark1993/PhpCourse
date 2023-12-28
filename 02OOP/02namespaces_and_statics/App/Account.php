<?php

declare(strict_types=1);

namespace App;

//importing class with an alias
use DateTime as DT;

new DT();

//to access methods from the global namespace, you need to add a backslash at the start of the methods name.
//or, you can 'use DateTime;'
//new \DateTime();

class Account
{
  public SocialMedia $socialMedia;
  public string $name;
  public float $balance;
  public const INTEREST_RATE = 2;
  public static int $count = 0; //will store the number of instances where created from this class

  /* 
  * Magic methods are special methods which override PHP's default's action when certain actions are performed on an object.
  * All magic methods must be declared as public, with exception of __construct(), __destruct() and __clone().
  * All magic methods names starts with __.
  */
  public function __construct(string $name, float $balance)
  {
    $this->name = $name;
    $this->balance = $balance;
    $this->socialMedia = new SocialMedia();

    //this refers to the object, self refers to the class.
    self::$count++;
  }

  public function deposit(float $amount)
  {
    $this->balance += $amount;
    return $this; //method chaining
  }
}
