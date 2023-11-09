<?php
$number = 2;

function getStatus(int|float $paymentStatus, bool $showMessage): ?string
{

  $var = match ($paymentStatus) {
    1 => 'the number is one <br>',
    2 => 'the number is two <br>',
    default => 'I dont know <br>'
  };

  if ($showMessage) {
    echo $var;
    return true; //it was converted to string
  }

  return $var;
}

var_dump(getStatus(2, true));
