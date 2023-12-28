<?php

function foo()
{
  static $a = 1;
  return $a++;
}

echo foo() . "\n";
echo foo() . "\n";
echo foo() . "\n";
echo "\n";
