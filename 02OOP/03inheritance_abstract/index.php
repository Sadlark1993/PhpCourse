<?php

use App\ToasterPremium;

require_once "App/ToasterPremium.php";

$myToaster = new ToasterPremium();
$myToaster->toast();
echo "\n";
