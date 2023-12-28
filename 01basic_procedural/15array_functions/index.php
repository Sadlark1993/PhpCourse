<?php

$users = ['John', 'Jane', 'Bob', null];

if (isset($users[3])) {
  echo "\nThird user not null";
}

if (array_key_exists(3, $users)) {
  echo "\nBut the value was stored";
}

//usually, the array_filter function removes nulls and '' values from the array. But we can insert a callback function to adjust this.
$users = array_filter($users, fn ($user) => $user !== 'Bob');
$users = array_filter($users);
print_r($users);

$numbers2 = array(
  "one" => "um",
  "two" => "dois",
  "three" => "tres",
  "four" => "quatro"
);

$numbers = $numbers2;

unset($numbers['two']);
echo "\n\n sem o dois: ";
print_r($numbers);

echo "\n\n com o dois: ";
print_r($numbers2);



$users = array_map(fn ($user) => strtoupper($user), $users);
print_r($users);

$users = array_merge(
  $users,
  ['SAM', 'JESSICA'],
  ['CLAUDIO']
);

sort($users);
echo "\nsorted: \n";
print_r($users);

//descructuring 
$nums = ['example' => 5, 3, 8, 10];

[$a, $b] = $nums;
['example' => $c, 0 => $d] = $nums;
echo "\na: " . $a;
echo "\nb: " . $b;
echo "\nc: " . $c;
echo "\nd: " . $d;

echo "\n\n";
