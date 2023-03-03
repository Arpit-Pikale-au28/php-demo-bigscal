<?php
    $db_name = 'mysql:host=localhost;dbname=demo';
    $username = 'root';
    $password = 'Arpit@123';
    
    $pdo = new PDO($db_name, $username, $password);
    /*
    $sql = $conn->query("select * from student_info");

    while($row = $sql->fetch(PDO::FETCH_ASSOC)){   // PDO::FETCH_ASSOC, PDO::FETCH_NUM, PDO::FETCH_BOTH, PDO::OBJ   

          echo($row['id'] ." ". $row['name']. " " . $row['city'] ." ". $row['gender'] ." ". $row['birth_date'] . "<br>");
          
          
    //     echo "<pre>";
    //     print_r($row);
    //     echo "</pre>";
    }
    */

    // inserting a data into sql --------------------------------------
    /*
    $sql = "insert into student_info(name, city, gender, birth_date) values (:name, :city, :gender, :birth_date)";
    
    $statement = $pdo->prepare($sql);

    $statement->execute([
        'name' => 'Roshan', 
        'city' => 'Delhi', 
        'gender' => 'M', 
        'birth_date' => '1998-08-08'
    ]);

    $lastentry =  $pdo->lastInsertId();
    echo 'The publisher id ' . $lastentry. ' was inserted';
    */


    // --------------------- fetch Recods from Database ------------------------------------------------

     /*

     function getFilteredData($city) {
        global $pdo;
         $sql = 'select * from student_info where city = :city';
         $statement =  $pdo->prepare($sql);
         $statement->execute([':city' => "Amravati"]);
         
        return $statement->fetchAll(PDO::FETCH_ASSOC);
     }
      $result = getFilteredData('Amravati');

      print_r($result);

    */
    // ---------------------fetch record by like Keyword ------------------------------
    
    // function getLikeData($str) {
    //    global $pdo;
    //    $pattern = '%'.$str.'%';
    //    $sql = 'select * from student_info where name LIKE :pattern';
    //    $statement = $pdo->prepare($sql);
    //    $statement->execute([':pattern' => $pattern]);

    //    return $statement->fetchAll(PDO::FETCH_ASSOC);

    // }

    // $result  = getLikeData('jeet');
    // print_r($result);

    //Generate placeholders (?) and construct the SQL statement with the IN operator.

    function getdata_using_IN_operator($list) {
        global $pdo;
        $sql = 'select * from student_info where id IN(?, ?, ?)';
        $statement = $pdo->prepare($sql);
        $statement->execute($list);

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
     $result  = getdata_using_IN_operator([1,2,3]);   // if it is string value then  ('1','2','3');
     print_r($result);

?>