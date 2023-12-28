<?php

declare(strict_types=1);

require_once 'Account.php';
require_once 'PropertyPromotion.php';

//importing Account class from the namespace directory App. (remember that it's backslash)
use App\Account;

$myAccount = new Account('Junior', 9.5);
$johnsAccount = new PropertyPromotion('John', 4.8);

//method chaining
$myAccount->deposit(50)->deposit(30);

//this will not execute because fo the null-safe operator '?'. Only php > 8.0
$silvasAccount?->deposit(20);

echo $myAccount->balance . "\n";
echo $johnsAccount->balance . "\n";
