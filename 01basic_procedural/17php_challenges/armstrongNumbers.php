<?php

/*
  An Armstrong number is a number that is the sum of its own digits, each raised to the power of the number of digits.
  For example:
  9 is an Armstrong number, because 9 = 9^1 = 9

  10 is not an Armstrong number, because 10 != 1^2 + 0^2 = 1

  153 is an Armstrong number, because: 153 = 1^3 + 5^3 + 3^3 = 1 + 125 + 27 = 153

  154 is not an Armstrong number, because: 154 != 1^3 + 5^3 + 4^3 = 1 + 125 + 64 = 190

  Write some code to determine whether a number is an Armstrong number.
  */

declare(strinct_types=1);

function isArmstrongNumber(int $number): bool
{
  $digits = str_split((string)$number);
  $sum = 0;
  foreach ($digits as $value) {
    $sum += pow(((int)$value), sizeof($digits));
  }

  if ($sum == $number) return true;
  return false;
}

echo isArmstrongNumber(153) ? "\nyes\n" : "\nno\n";
