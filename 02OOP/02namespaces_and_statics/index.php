<?php

declare(strict_types=1);

//not necessary, cuz we are using class autoloader
//require_once 'App/Account.php';
//require_once 'App/SocialMedia.php';

//class autoloader
spl_autoload_register(function ($class) {
  $formattedClass = str_replace("\\", "/", $class);
  $path = "{$formattedClass}.php";

  require_once $path;
});

//importing Account class from the namespace directory App. (remember that it's backslash)
use App\{Account, SocialMedia, Utility};

$myAccount = new Account('Junior', 9.5);

//method chaining
$myAccount->deposit(50)->deposit(30);

//this will not execute because fo the null-safe operator '?'. Only php > 8.0
$silvasAccount?->deposit(20);

echo $myAccount->balance . "\n";
echo $myAccount::INTEREST_RATE . "\n";

//PHP allows to access a class constant without a instance:
echo Account::INTEREST_RATE . "\n";
echo Account::$count . "\n";

Utility::printArr([5, 8, 30]);
