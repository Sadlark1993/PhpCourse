<?php
//if we dont trigger strict_types, php will just convert the incoming aguments to the chosen type
//strict_types forces the programmer to insert the right type into functions and methods.
declare(strict_types=1);

$number = 2;

function getStatus(int|float $paymentStatus, bool $showMessage): ?string // ? makes the return optional.
{

  $var = match ($paymentStatus) {
    1 => 'the number is one <br>',
    2 => 'the number is two <br>',
    default => 'I dont know <br>'
  };

  if ($showMessage) {
    echo "\n" . $var;
    return null; //it was converted to string
  }

  return $var;
}

var_dump(getStatus(1, true));
