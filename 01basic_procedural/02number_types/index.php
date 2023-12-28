<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Number Types</h1>
  <p><?php
      $number = -5_000; //same as $number = 5000;
      var_dump($number);
      ?>
  </p>
  <p><?php
      $floatingVar = -1.23; //same as $number = 5000;
      var_dump($floatingVar);
      ?>
  </p>
  <p><?php
      $name = "John"; //same as $number = 5000;
      $fullName = "{$name}es Smith";
      var_dump($fullName);
      ?>
  </p>

  <p><?php
      // prints a char from a string...
      var_dump($name[2])
      ?>
  </p>
</body>

</html>