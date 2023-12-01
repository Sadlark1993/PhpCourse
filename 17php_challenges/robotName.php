<?php

declare(strict_types=1);

//********************* Mine Solution ************************************** */

function getNewName(): string
{
  $name = chr(rand(65, 90));
  $name .= chr(rand(65, 90));
  $name .= chr(rand(48, 57));
  $name .= chr(rand(48, 57));
  $name .= chr(rand(48, 57));

  return $name;
}

echo "\n" . getNewName() . "\n\n";


//********************* Teacher's Solution ************************************** */

function getNewName2(): string
{
  $letters = range('A', 'Z');
  shuffle($letters);
  $number = mt_rand(100, 999);

  return "{$letters[0]}{$letters[1]}{$number}";
}

echo "\n" . getNewName2() . "\n\n";
