<?php
$multiplier = 2;

//anonymous and arrow functions are stored into variables;
//arrow functions always return something;
//arrow functions must have only one expression. You cant put more than one line in it.
$multiply = fn ($num) => $num * $multiplier;

function iWillMutiply($num)
{
  return $num * 2;
}

//the 'use' keyword provides access of a copy of a variable that are outside the funcion
//if you define the argument as callable type, you can pass a string with the name of the callable function
$sum = function (int|float $a, int|float $b, callable $callback) use ($multiplier) {
  echo $multiplier . "\n";
  return $callback($a + $b);
};

echo $sum(5, 2, fn ($num) => $num * $multiplier);
echo "\nnew multiplier: " . $multiplier;
//echo "\nnew return: " . $sum(5, 3, "iWillMultiply"); //now working
echo "\n\n";
