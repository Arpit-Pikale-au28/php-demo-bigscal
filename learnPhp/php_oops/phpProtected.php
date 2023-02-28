<?php


class BankAccount
{
    protected $balance;    // this will allow o access in child class only

    public function __construct($balance)
    {
        $this->balance = $balance;
    }

    
}

class Acccount extends BankAccount{
            
    public function getBalance(){
         return $this->balance;
    }

}

$person =  new Acccount(200);

$balance = $person->getBalance();
var_dump($balance)
?>