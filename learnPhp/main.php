<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>

<body>
   <?php
   $arr = array("apple", "grapes", "mango", "banana");

   foreach ($arr as $value) {
      echo 'The value of array is  ' . $value . '<br>';
   }

   $arr2 = [
      "name" => "Arpit",
      "age" => 24,
      "address" => "pune"
   ];

   var_dump($arr2);
   foreach ($arr2 as $value) {
      echo 'The value of array is  ' . $value . '<br>';
   }

   ?>
   <?php
   $var = "arpit";
   $var2 =  &$var;
   $var = "sagar";
   echo $var2;
   ?>

   <?php
   /* Intentional file error */
   $my_file = @file('non_existent_file') or
      die("Failed opening file: error was '" . error_get_last()['message'] . "'");

   // this works for any expression, not just functions:
   $value = @$cache[$key];
   // will not issue a notice if the index $key doesn't exist.

   ?>

</body>

</html>