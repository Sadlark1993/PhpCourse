<?php
$multiplier = 2;

//anonymous and arrow functions are stored into variables;
//arrow functions always return something;
//arrow functions must have only one expression. You cant put more than one line in it.
$multiply = fn ($num) => $num * $multiplier;

//the 'use' keyword provides access of a copy of a variable that are outside the funcion
$sum = function ($a, $b, $callback) use ($multiplier) {
  echo $multiplier . "\n";
  return $callback($a + $b);
};

echo $sum(5, 2, $multiply);
echo "\nnew multiplier: " . $multiplier;
echo "\n\n";
