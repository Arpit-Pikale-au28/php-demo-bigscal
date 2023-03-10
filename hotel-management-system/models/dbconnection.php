<?php
  $host = 'localhost';
  $db = 'hotelmanagement';
  $user = 'root';
  $password = "Arpit@123";

  $dsn = "mysql:host=$host;dbname=$db;charset=UTF8";

  try {
    $PDO = new PDO($dsn, $user, $password);
    if($PDO) {
        //echo 'successfully connected to the server';
    }
  }
  catch (PDOException $e) {
      echo $e->getMessage();
  }
  
?>