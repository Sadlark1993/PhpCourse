<?php

$cup = 'empty';

//usually, whan you pass a variable as parameter, php creates a copy of it.
//when you put an '&' before the param, the variable is passed by reference. So, it can be modified from within the function.
function fillCup(&$cupParam)
{
  $cupParam = 'filled';
}

fillCup($cup);

echo "\nn" . $cup . "\n";
