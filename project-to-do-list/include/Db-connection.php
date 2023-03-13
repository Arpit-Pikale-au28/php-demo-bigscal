<?php
$host = 'localhost';
$username = 'root';
$password = "Arpit@123";

//create connection
$PDO = new PDO("mysql:host=$host", $username, $password);

//check connection 
try {
    $options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    if ($PDO) {
        echo "<script>console.log('connected successfully to server')</script>";
    }
    createDatabase();
    createTables();
} catch (PDOException $e) {
    echo "<script>console.log('error while connecting to server plz check valid credentials')</script>";
}



function createDatabase() {
       global $PDO;
       
       $statement = $PDO->query("CREATE DATABASE IF NOT EXISTS to_do_list");
}


function createTables() {
    global $PDO;

    $statements = [
        'CREATE TABLE IF NOT EXISTS to_do_list.tbl_user(
            id INT AUTO_INCREMENT PRIMARY KEY,
            fname VARCHAR(10) NOT NULL,
            lname VARCHAR(10) NOT NULL,
            password varchar(10) NOT NULL,
            image varchar(20)
         );',
        'CREATE TABLE IF NOT EXISTS to_do_list.tbl_todo(
        id INT auto_increment primary KEY,
        todo varchar(100),
        image varchar(20),
        user_id int,
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        foreign key(user_id)
        references tbl_user(id)
        on update cascade
        on delete cascade
)'];

 foreach ($statements as $statement) {
    $PDO->exec($statement);
 }
   


};
