<?php

//the variadic argument ($numbers) must always be the last argument
function sum(int|float ...$numbers)
{
  return array_sum($numbers);
}

echo sum(5, 8, 15, 16, -9);
echo "\n\n";
