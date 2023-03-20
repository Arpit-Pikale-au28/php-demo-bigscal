<?php
 
 class Connection {
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'Arpit@123';
    private $PDO;
    
    public function __construct()
    {
        try{
            $this->PDO = new PDO("mysql:host=$this->host", $this->username, $this->password);
            $this->PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo 'Error connnecting to database '. $e->getMessage();
        }

    }

    public function createDatabase($db_name){
        $statement = $this->PDO->query('CREATE DATABASE IF NOT EXISTS '.$db_name);
        $this->PDO->query("use $db_name");
        if($statement == false){
            echo "Error creating database ";
        }
    }

    public function createTable($table_name, $colums){
         try{
            $sql = "CREATE TABLE IF NOT EXISTS $table_name (";
            foreach ($colums as $column_name => $column_details) {
                $sql .= "$column_name $column_details,";
            }
            $sql = rtrim($sql, ',');
            $sql .= ")";
            $this->PDO->query($sql);

         }catch(PDOException $e){
            echo "error !!". $e->getMessage();
         }
    }

    public function insert_values($table, $data) {
        $keys = array_keys($data);
        $values = array_values($data);

        $query = "INSERT INTO $table (" . implode(',', $keys) . ") VALUES ('" . implode("','", $values) . "')";

        
        if ($this->PDO->query($query) === TRUE) {
            return $this->PDO->lastInsertId();
        } else {
            return false;
        }
    }





 }
?>