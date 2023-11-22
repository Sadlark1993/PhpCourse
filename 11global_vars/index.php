<?php
$x = 5;

function foo()
{
  global $x; //global pulls the variable from outside. It can be fully modified from inside
  echo $x; //5
  $x++;
}

foo();
echo "\n" . $x; //6
echo "\n\n";
