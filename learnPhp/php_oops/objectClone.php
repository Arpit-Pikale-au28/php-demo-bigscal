<?php
    class Person{
        public $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
    }


$arpit = new Person("Arpit");

$isha = clone $arpit;

$isha->name = "Isha";

echo $isha->name;
echo $arpit->name;   // both prints isha isha



?>  