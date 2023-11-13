<?php
$multiplier = 2;

//anonymous and arrow functions are stored into variables;
//arrow functions always return something;
//arrow functions must have only one expression. You cant put more than one line in it.
$multiply = fn ($num) => $num * $multiplier;

$sum = function ($a, $b, $callback) {
  return $callback($a + $b);
};

echo $sum(5, 2, $multiply);
echo "\n\n";
