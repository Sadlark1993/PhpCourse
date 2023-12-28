<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p><?php
      $foods = ["pizza", "burger", "bread"];
      $foods[1] = "chicken";
      $foods[] = "Pumpkin"; //adds the item to the end of the array
      var_dump($foods);
      ?></p>

  <p><?php
      //associative arrays: 
      $foods = ["John" => "pizza", "Mary" => "burger", "Thomas" => "bread"];
      $foods["Mary"] = "chicken";
      $foods[] = "Pumpkin"; //if you don't specify a key, PHP attaches a number to it.
      var_dump($foods);

      //you can make the array multidimensional.
      ?></p>
</body>

</html>