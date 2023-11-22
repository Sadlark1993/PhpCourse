<?php

//the variadic argument ($numbers) must always be the last argument
function sum(int|float ...$numbers)
{
  return array_sum($numbers);
}

function sub($a, $b)
{
  return $a - $b;
}

echo sum(5, 8, 15, 16, -9);
echo "\n" . sub(b: 2, a: 6);
echo "\n\n";
