<?php

declare(strict_types=1);

//class autoloader
spl_autoload_register(function ($class) {
  $formattedClass = str_replace("\\", "/", $class);
  $path = "{$formattedClass}.php";

  require_once $path;
});

use App\EmptyArrayException;
use App\Utility;

try {
  Utility::printArr([]);
} catch (InvalidArgumentException | EmptyArrayException $e) {
  echo "Exception: {$e->getMessage()}\n";
} catch (Exception $e) {
  echo "Default exception: {$e->getMessage()}\n";
} finally {
  echo "Finally block\n";
}

echo "Finished Script\n";
