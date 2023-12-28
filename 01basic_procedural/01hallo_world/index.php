<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <!-- this is a comment -->
  <?php
  //this is a comment
  # this is another comment
  echo "<h1>Hallo, world!</h1>"
  ?>


  <p>
    <?php
    //php is a dynamic typed language
    $age = 30 + 1;
    echo "my age is ", $age;

    /* PHP Data Types 
    * null;
    * bool;
    * int;
    * float;
    * string;
    * array;
    * object;
    * callable;
    * resource.
    */


    ?>
  </p>
  <?php
  //this function displays the value and its type
  var_dump($age);

  const MY_CONSTANT = "This is a constant" . " :)"; //Concatenation
  echo MY_CONSTANT;

  $var = 'hallo, ';
  $var .= MY_CONSTANT;
  echo "<br>";
  echo $var;
  ?>
  <p>

  </p>

</body>

</html>