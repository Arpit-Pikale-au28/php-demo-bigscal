<?php

class abc
{
    const name = "Arpit";
    public static function greet()
    {
        return "Good Afternoon " . self::name;
    }

    public static function greetings()
    {
        echo  self::greet();
    }
}

abc::greetings()

?>


<?php
// late static binding


class Model
{
    protected static $tableName = 'Model';

    public static function getTableName()
    {
        return static::$tableName;     // 
    }
}

class User extends Model
{
    protected static $tableName = 'User';
}

echo User::getTableName(); // User

?>