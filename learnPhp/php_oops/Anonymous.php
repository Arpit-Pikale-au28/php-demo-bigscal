<?php

$person = new class{
    public function getName(string $name) : void{
        echo "Hello ".$name ;
    }
};

$person->getName("Arpit");
?>

