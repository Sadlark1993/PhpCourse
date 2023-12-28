<?php

declare(strict_types=1);

require_once 'Account.php';

$myAccount = new Account('Junior', 9.5);
$johnsAccount = new Account('John', 4.8);

echo $myAccount->balance . "\n";
