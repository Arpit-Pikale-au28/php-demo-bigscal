<?php
   require 'config.php';


    
    try {
        $conn = new PDO($db_name, $username, $password);

        if ($conn) {
            echo "Connected to the $conn database successfully!";
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
         
  
?>