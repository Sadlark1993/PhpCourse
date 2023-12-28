<?php

declare(strict_types=1);

require_once 'Account.php';
require_once 'PropertyPromotion.php';

$myAccount = new Account('Junior', 9.5);
$johnsAccount = new PropertyPromotion('John', 4.8);

$myAccount->deposit(50)->deposit(30);

echo $myAccount->balance . "\n";
echo $johnsAccount->balance . "\n";
