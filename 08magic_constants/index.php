<?php

/* Magic constats are very useful. For exemple the constant __DIR__ stores the path to the current file. */
echo __DIR__ . "\n\n"; //that's awesome!!!

//two ways to define constants

//can be declared from within a class, can't be declared inside if statements.
const CONSTANT1 = "hii";

//can't be declared from within a class, can be declared inside if statements.
define('CONSTANT2', 'hallo');
